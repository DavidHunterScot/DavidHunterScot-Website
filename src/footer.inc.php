
        <footer>
            <div class="w3-auto w3-padding">
                <p class="w3-center">Copyright &copy; David Hunter.</p>
            </div>
        </footer>

        <script>
            var email_addresses = document.getElementsByClassName( 'email_address' );

            for( let i = 0; i < email_addresses.length; i++ )
            {
                var the_email_address = email_addresses[ i ].innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );

                email_addresses[ i ].innerHTML = '<a href="mailto:' + the_email_address + '" target="_blank">' + the_email_address + '</a>';
            }
        </script>
    </body>
</html>
