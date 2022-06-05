<section class="features16 cid-t7RN0xFoFy" id="features16-0" data-rv-view="10">
    
    
    
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2"><strong>CLUB INSTRUCTORS</strong></h2>
        
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/dan23-1440x1800.jpg" alt="Instuctor Habdul" title="" media-simple="true">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">Abdullateef Daniju</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Founder | Chief Instructor</p>
                    </div>
                    <div class="item-social pt-2">
                        <a href="https://twitter.com/" target="_blank">
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-twitter socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-facebook socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-linkedin socicon" media-simple="true"></span>
                            
                            
                        </a>
                    </div>
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/dan24-1440x1800.jpg" alt="Instuctor Deen" title="" media-simple="true">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">Nurudeen Daniju</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Senior Instructor</p>
                    </div>
                    <div class="item-social pt-2">
                        <a href="https://twitter.com/" target="_blank">
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-twitter socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-facebook socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-linkedin socicon" media-simple="true"></span>
                            
                            
                        </a>
                    </div>
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/dan26-1440x1800.jpg" alt="Instuctor Hanat" title="" media-simple="true">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">Hanat Daniju</p>
                    </div>
                    <div class="item-role px-2">
                        <p>Senior Instructor</p>
                    </div>
                    <div class="item-social pt-2">
                        <a href="https://twitter.com/" target="_blank">
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-twitter socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-facebook socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" media-simple="true"></span>
                            <span class="p-1 mbr-iconfont mbr-iconfont-social socicon-linkedin socicon" media-simple="true"></span>
                            
                            
                        </a>
                    </div>
                </div>
            </div></div>    
    </div>
</section>/*!
    * Start Bootstrap - SB Admin v7.0.3 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});
