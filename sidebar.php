<?php
echo '
<aside class="d-flex flex-column px-2 myside-bar">
<h3 class="mt-1">
    <span class="fw-bold border-start border-5 ps-2 toggle-font"
        style="border-left-color: #00c1fe !important;">E-classe</span>
</h3>

<div class="d-flex justify-content-center">
    <img src="img/youcode.png" class="mt-1 mb-2 rounded-circle w-75 " alt="Admin image">
</div>

<div class="d-flex flex-column align-items-center mb-1 mt-1">
    <p class="text-black fw-bold toggle-hide">Admin name</p>
    <a href="#" class="d-block text-primary nav-link"> Admin </a>
</div>

<ul class="nav flex-column">
    <li>
        <a href="#"
            class="nav-link active text-black rounded d-flex justify-content-evenly align-items-center"
            style="background: #00C1FE;">
            <i class="fas fa-home-lg-alt"></i>
            <span class="toggle-hide">
                Home
            </span>
        </a>
    </li>
    <li class="link-hover">
        <a href="#" class="nav-link text-black d-flex justify-content-evenly align-items-center">
            <i class="far fa-bookmark"></i>
            <span class="toggle-hide">
                Course
            </span>

        </a>
    </li>
    <li class="link-hover">
        <a href="student.php"
            class="nav-link text-black d-flex justify-content-evenly align-items-center">
            <svg width="20" style="margin-top: 7px;" height="12" viewBox="0 0 20 12" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.13 2.81219L10.8488 0.134689C10.2922 -0.0449982 9.70813 -0.0449982 9.15156 0.134689L0.870313 2.81219C0.341875 2.98313 0 3.44938 0 4C0 4.55063 0.341875 5.01688 0.87 5.18781L1.79844 5.48781C1.69531 5.68094 1.61906 5.88875 1.56938 6.10656C1.23531 6.26844 1 6.60375 1 7C1 7.39781 1.23656 7.735 1.57281 7.89594L1.00875 11.3916C0.958437 11.7038 1.13094 12 1.36312 12H2.63656C2.86875 12 3.04156 11.7038 2.99094 11.3916L2.42719 7.89594C2.76344 7.735 3 7.39781 3 7C3 6.66875 2.82844 6.38938 2.58031 6.20719C2.62687 6.06156 2.69906 5.93031 2.78562 5.80688L4.45656 6.34719L4 10C4 11.1047 6.68625 12 10 12C13.3138 12 16 11.1047 16 10L15.5434 6.34719L19.13 5.1875C19.6581 5.01688 20 4.55063 20 4C20 3.44938 19.6581 2.98313 19.13 2.81219ZM14.9838 9.93313C14.6475 10.2872 12.9388 11 10 11C7.06125 11 5.3525 10.2872 5.01625 9.93313L5.42531 6.66031L9.15156 7.865C9.23281 7.89125 9.95531 8.15344 10.8488 7.865L14.575 6.66031L14.9838 9.93313ZM18.8213 4.23688L10.54 6.91438C10.1866 7.02875 9.81344 7.02875 9.46 6.91438L3.97031 5.13938L10.0919 3.99125C10.3634 3.94063 10.5422 3.67938 10.4913 3.40781C10.4406 3.13594 10.1737 2.95813 9.90812 3.00875L3.54 4.2025C3.1525 4.275 2.80531 4.44156 2.50625 4.66594L1.17844 4.23656C0.933125 4.15688 0.945312 3.83844 1.17844 3.76313L9.45969 1.08563C9.93156 0.933127 10.3297 1.01781 10.5397 1.08563L18.8209 3.76313C19.0519 3.83781 19.0681 4.15688 18.8213 4.23688Z"
                    fill="black" />
            </svg>
            <span class="toggle-hide">
                Students
            </span>
        </a>
    </li>
    <li class="link-hover">
        <a href="Payment.php"
            class="nav-link text-black d-flex justify-content-evenly align-items-center">
            <i class="fas fa-file-invoice-dollar"></i>
            <span class="toggle-hide">
                Payment
            </span>
        </a>
    </li>
    <li class="link-hover">
        <a href="#" class="nav-link text-black d-flex justify-content-evenly align-items-center">
            <i class="fas fa-chart-line"></i>
            <span class="toggle-hide">
                Report
            </span>
        </a>
    </li>
    <li class="link-hover">
        <a href="#"
            class="nav-link text-black d-flex justify-content-evenly align-items-center">
            <i class="fas fa-cogs"></i>

            <span class="toggle-hide">
                Settings
            </span>
        </a>
    </li>
    <li >
        <a href="#">
            <span style="visibility: hidden;">
                logout
            </span>
        </a>
    </li>
</ul>
<div class="">
    <a href="#" class="text-black nav-link d-flex justify-content-evenly align-items-center">
        <i class="fas fa-sign-out-alt"></i>

        <span class="toggle-hide">
            logout
        </span>
    </a>

</div>
</aside>
';