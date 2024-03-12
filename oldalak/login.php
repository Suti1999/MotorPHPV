<link rel="stylesheet" href="./css_script/login.css"/>
    
<?php 
if (!isset($_SESSION['login'])){$_SESSION['login'] = false;}
if (filter_input(INPUT_POST,
                'belepesiAdatok',
                FILTER_VALIDATE_BOOLEAN,
                FILTER_NULL_ON_FAILURE)){
    $email = htmlspecialchars(filter_input(INPUT_POST, 'InputEmail'));
    $password = htmlspecialchars(filter_input(INPUT_POST, 'InputPassword'));
    if ($db->login($email, $password)){
        $_SESSION['login'] = true;
        header("Location: index.php");
    }
}
?>

<!--KARTYA-->
    <div class="card position-relative">
        
        <!--KARTYA_CIM-->
        <div class="card-header text-center text-md-center">
            <h1 class="mb-0 fs-5">Bejelentkezés</h1>
        </div>
        
        <!--KARTYA_TESTE-->
        <div class="card-body py-3">
            <form action="#" method="post" novalidate>
                <div class="from-group mb-4">

                    <!--E-MAIL-->
                    <label for="InputEmail"><b>E-mail cím:</b></label>
                    <div class="input-group">
                        <span class="input-group-text" id="inline_elem1">
                            <span class="fas fa-envelope">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                </svg>
                            </span>
                        </span>
                        <input type="email" class="form-control" placeholder="Név@példa.com" id="InputEmail" name="InputEmail" autofocus required>
                    </div>

                    <hr>
                    
                    <!--JELSZO-->
                    <label for="InputPassword"><b>Jelszó:</b></label>
                    <div class="input-group">
                        <span class="input-group-text" id="inline_elem2">
                            <span class="fas fa-envelope">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </span>
                        </span>
                        <input type="password" class="form-control" placeholder="Jelszó" id="InputPassword" name="InputPassword" autofocus required>
                    </div>
                    <hr>
                </div>
                
                <div class="elfelejtettJelszo">
                    <p><a href="index.php?menu=EmailKerelem">Elfelejtette jelszavát?</a></p>
                </div>
                
                <br>
                
                <!--BEJELENTKEZES_GOMB-->
                <div class="d-grid">
                    <button type="submit" name="belepesiAdatok" class="btn btn-primary" value="true">Bejelentkezés</button>
                </div>
            </form>
        </div>
    </div>