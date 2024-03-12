<link rel="stylesheet" href="./css_script/elfelejtettjelszo.css"/>



 <div class="card position-relative"> 
    <!--KARTYA_CIM-->
    <div class="card-header text-center text-md-center">
        <h1 class="mb-0 fs-5">Új jelszó</h1>
    </div>
    <!--KARTYA_TESTE-->
    <div class="card-body py-3">
        <form action="#" method="post" novalidate>
            <div class="from-group mb-4">                
                <!--E-MAIL-->
                <label for="UjJelszo"><b>Új jelszó:</b></label>
                    <div class="input-group">
                        <span class="input-group-text" id="inline_elem2">
                            <span class="fas fa-envelope">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </span>
                        </span>
                        <input type="password" class="form-control" placeholder="Új jelszó" id="UjJelszo" name="UjJelszo" autofocus required>
                    </div>
                    <br>
                    <hr>        
            </div>
            <div class="from-group mb-4">                
                <!--E-MAIL-->
                <label for="UjJelszoMegerosites"><b>Új jelszó megerősítés:</b></label>
                    <div class="input-group">
                        <span class="input-group-text" id="inline_elem2">
                            <span class="fas fa-envelope">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </span>
                        </span>
                        <input type="password" class="form-control" placeholder="Új jelszó megerősítés" id="UjJelszoMegerosites" name="UjJelszoMegerosites" autofocus required>
                    </div>
                    <br>
                    <hr>        
            </div>
                    <br>
            <!--BEJELENTKEZES_GOMB-->
            <div class="d-grid">
                <button type="submit" name="JelszoKerelem" class="btn btn-success" value="true">Kérelem elküldése</button>
            </div>
        </form>
    </div>
</div>