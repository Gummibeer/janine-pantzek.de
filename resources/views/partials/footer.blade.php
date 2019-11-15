@if(request()->is('kontakt'))
    <div id="footer-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.6781376390621!2d9.98997035035257!3d53.58266977181245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b188cc8e62e2eb%3A0x771d3aee60a28c97!2sDr.+med.+Janine+Pantzek!5e0!3m2!1sde!2sde!4v1561024074707!5m2!1sde!2sde"  width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endif
<footer id="footer" class="bg-light">
    <div class="px-4 py-2 clearfix">
        <div class="float-left">
            &copy; {{ date('Y') }} Dr. med. Janine Pantzek; all rights reserved.
        </div>
        <div class="float-right">
            <ul class="list-inline m-0">
                <li class="list-inline-item">
                    <a href="mailto:info@janine-pantzek.com">info@janine-pantzek.com</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ url('impressum') }}">Impressum</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ url('datenschutz') }}">Datenschutz</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
