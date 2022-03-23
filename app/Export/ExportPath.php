<?php

namespace App\Export;

use RuntimeException;
use Illuminate\Http\Request;
use Spatie\Export\Destination;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Contracts\Routing\UrlGenerator;

class ExportPath extends \Spatie\Export\Jobs\ExportPath
{
    public function handle(Kernel $kernel, Destination $destination, UrlGenerator $urlGenerator): void
    {
        $response = $kernel->handle(
            Request::create($urlGenerator->to($this->path))
        );

        if($response->isRedirect()) {
            $redirectTo = url($response->headers->get('Location'));

            $destination->write(
                $this->normalizePath($this->path),
                <<<HTML
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8" />
                    <meta http-equiv="refresh" content="1;url=$redirectTo" />
                    <title>Redirecting to $redirectTo</title>
                </head>
                <body>
                    Redirecting to <a href="$redirectTo">$redirectTo</a>.
                </body>
                </html>
                HTML
            );
            return;
        }

        if ($response->status() !== 200) {
            throw new RuntimeException("Path [{$this->path}] returned status code [{$response->status()}]");
        }

        $destination->write($this->normalizePath($this->path), $response->content());
    }
}
