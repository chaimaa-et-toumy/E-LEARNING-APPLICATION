<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Classe Payment</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .myside-bar {
            width: 16rem;
            background-color: #FAFFC1;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            /* bottom: 0; */
            min-height: 100vh;
            /* overflow: hidden; */
        }

        .main-header,
        .content-wrapper {
            margin-left: 16rem;
        }

        .toggle-myside-bar {
            width: 5rem;
        }

        .content-wrapper,
        .main-header,
        .myside-bar {
            transition: 0.5s;
        }

        .toggle-myside-bar~.main-header,
        .toggle-myside-bar~.content-wrapper {
            margin-left: 5rem;
        }

        .toggle-myside-bar .toggle-hide {
            display: none;
        }

        .toggle-myside-bar .toggle-font {
            font-size: 21px;
        }

        .link-hover:hover {
            background: #00C1FE;
            border-radius: 3px;
        }

        @media screen and (max-width: 567px) {
            .myside-bar {
                width: 5rem;
            }

            .main-header,
            .content-wrapper {
                margin-left: 5rem;
            }

            .toggle-hide {
                display: none;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini bg-content">
    <main>
        <div class="wrapper container-fluid">
            <!-- sidebar menu -->
            <?php include ("sidebar.php"); ?>
            <!-- Main Sidebar Container -->

            <!-- Navbar -->
            <?php include ("header.php"); ?>
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="px-2 overflow-auto">
                    <div class="d-flex justify-content-between pt-3 px-3">
                        <h1 class="text-capitalize h3 fw-bold">
                            payments details
                        </h1>
                        <div>
                            <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.6 11.375H1.39998C0.157481 11.375 -0.472519 12.8574 0.411231 13.7211L6.01123 19.2211C6.55811 19.7582 7.44623 19.7582 7.99311 19.2211L13.5931 13.7211C14.4681 12.8574 13.8425 11.375 12.6 11.375ZM6.99998 18.25L1.39998 12.75H12.6L6.99998 18.25ZM1.39998 8.625H12.6C13.8425 8.625 14.4725 7.14257 13.5887 6.2789L7.98873 0.7789C7.44186 0.241791 6.55373 0.241791 6.00686 0.7789L0.406856 6.2789C-0.468144 7.14257 0.157481 8.625 1.39998 8.625ZM6.99998 1.74999L12.6 7.24999H1.39998L6.99998 1.74999Z"
                                    fill="#00C1FE" />
                            </svg>
                        </div>

                    </div>
                    <div class="table-responsive">
                    <!-- <table class="table table-striped mt-1 table-hover">
                        <thead>
                            <tr style="color: #ACACAC;" class="text-center">
                                <th scope="col">Name</th>
                                <th scope="col" class="text-nowrap">Payment Schedule</th>
                                <th scope="col" class="text-nowrap">Bill Number</th>
                                <th scope="col" class="text-nowrap">Amount Paid</th>
                                <th scope="col" class="text-nowrap">Balance amount</th>
                                <th scope="col">Date</th>
                                <th scope="col" style="display: none;">pour accissibilite</th>
                                <th scope="col" style="display: none;">pour accissibilite</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Karthi</td>
                                <td>First</td>
                                <td>00012223</td>
                                <td class="text-nowrap">DHS 100,000</td>
                                <td class="text-nowrap">DHS 500,000</td>
                                <td class="text-nowrap">05-Jan, 2022</td>
                                <td></td>
                                <td>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.49999 6.875C7.94201 6.875 8.36594 6.69063 8.6785 6.36244C8.99106 6.03425 9.16665 5.58913 9.16665 5.125C9.16665 4.66087 8.99106 4.21575 8.6785 3.88756C8.36594 3.55937 7.94201 3.375 7.49999 3.375C7.47394 3.375 7.45103 3.38156 7.42577 3.38293C7.50608 3.61516 7.52164 3.86664 7.47063 4.10783C7.41961 4.34903 7.30413 4.56994 7.13774 4.74465C6.97136 4.91935 6.76096 5.04061 6.53125 5.09417C6.30154 5.14774 6.06205 5.1314 5.84087 5.04707C5.84087 5.07441 5.83332 5.09848 5.83332 5.125C5.83332 5.35481 5.87643 5.58238 5.96019 5.7947C6.04394 6.00702 6.16671 6.19993 6.32147 6.36244C6.63403 6.69063 7.05796 6.875 7.49999 6.875ZM14.9094 5.60078C13.4971 2.70754 10.7013 0.75 7.49999 0.75C4.29868 0.75 1.50207 2.70891 0.0906108 5.60105C0.0310383 5.72479 0 5.86149 0 6.00014C0 6.13878 0.0310383 6.27549 0.0906108 6.39922C1.50285 9.29246 4.29868 11.25 7.49999 11.25C10.7013 11.25 13.4979 9.29109 14.9094 6.39895C14.9689 6.27521 15 6.13851 15 5.99986C15 5.86122 14.9689 5.72451 14.9094 5.60078ZM7.49999 1.625C8.15926 1.625 8.80372 1.83027 9.35188 2.21486C9.90005 2.59944 10.3273 3.14607 10.5796 3.78561C10.8319 4.42515 10.8979 5.12888 10.7693 5.80782C10.6407 6.48675 10.3232 7.11039 9.85701 7.59987C9.39083 8.08936 8.79689 8.4227 8.15029 8.55775C7.50368 8.6928 6.83346 8.62349 6.22437 8.35858C5.61529 8.09367 5.09469 7.64507 4.72842 7.0695C4.36215 6.49392 4.16665 5.81723 4.16665 5.125C4.16762 4.19705 4.51912 3.3074 5.14403 2.65125C5.76894 1.99509 6.61623 1.62601 7.49999 1.625ZM7.49999 10.375C4.70415 10.375 2.14946 8.69855 0.833319 6C1.57354 4.47419 2.7573 3.23556 4.21301 2.46363C3.66952 3.20246 3.33332 4.11793 3.33332 5.125C3.33332 6.28532 3.77231 7.39812 4.55371 8.21859C5.33511 9.03906 6.39492 9.5 7.49999 9.5C8.60505 9.5 9.66486 9.03906 10.4463 8.21859C11.2277 7.39812 11.6667 6.28532 11.6667 5.125C11.6667 4.11793 11.3305 3.20246 10.787 2.46363C12.2427 3.23556 13.4264 4.47419 14.1667 6C12.8508 8.69855 10.2958 10.375 7.49999 10.375Z"
                                            fill="#00C1FE" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>Karthi</td>
                                <td>First</td>
                                <td>00012223</td>
                                <td class="text-nowrap">DHS 100,000</td>
                                <td class="text-nowrap">DHS 500,000</td>
                                <td class="text-nowrap">05-Jan, 2022</td>
                                <td></td>
                                <td>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.49999 6.875C7.94201 6.875 8.36594 6.69063 8.6785 6.36244C8.99106 6.03425 9.16665 5.58913 9.16665 5.125C9.16665 4.66087 8.99106 4.21575 8.6785 3.88756C8.36594 3.55937 7.94201 3.375 7.49999 3.375C7.47394 3.375 7.45103 3.38156 7.42577 3.38293C7.50608 3.61516 7.52164 3.86664 7.47063 4.10783C7.41961 4.34903 7.30413 4.56994 7.13774 4.74465C6.97136 4.91935 6.76096 5.04061 6.53125 5.09417C6.30154 5.14774 6.06205 5.1314 5.84087 5.04707C5.84087 5.07441 5.83332 5.09848 5.83332 5.125C5.83332 5.35481 5.87643 5.58238 5.96019 5.7947C6.04394 6.00702 6.16671 6.19993 6.32147 6.36244C6.63403 6.69063 7.05796 6.875 7.49999 6.875ZM14.9094 5.60078C13.4971 2.70754 10.7013 0.75 7.49999 0.75C4.29868 0.75 1.50207 2.70891 0.0906108 5.60105C0.0310383 5.72479 0 5.86149 0 6.00014C0 6.13878 0.0310383 6.27549 0.0906108 6.39922C1.50285 9.29246 4.29868 11.25 7.49999 11.25C10.7013 11.25 13.4979 9.29109 14.9094 6.39895C14.9689 6.27521 15 6.13851 15 5.99986C15 5.86122 14.9689 5.72451 14.9094 5.60078ZM7.49999 1.625C8.15926 1.625 8.80372 1.83027 9.35188 2.21486C9.90005 2.59944 10.3273 3.14607 10.5796 3.78561C10.8319 4.42515 10.8979 5.12888 10.7693 5.80782C10.6407 6.48675 10.3232 7.11039 9.85701 7.59987C9.39083 8.08936 8.79689 8.4227 8.15029 8.55775C7.50368 8.6928 6.83346 8.62349 6.22437 8.35858C5.61529 8.09367 5.09469 7.64507 4.72842 7.0695C4.36215 6.49392 4.16665 5.81723 4.16665 5.125C4.16762 4.19705 4.51912 3.3074 5.14403 2.65125C5.76894 1.99509 6.61623 1.62601 7.49999 1.625ZM7.49999 10.375C4.70415 10.375 2.14946 8.69855 0.833319 6C1.57354 4.47419 2.7573 3.23556 4.21301 2.46363C3.66952 3.20246 3.33332 4.11793 3.33332 5.125C3.33332 6.28532 3.77231 7.39812 4.55371 8.21859C5.33511 9.03906 6.39492 9.5 7.49999 9.5C8.60505 9.5 9.66486 9.03906 10.4463 8.21859C11.2277 7.39812 11.6667 6.28532 11.6667 5.125C11.6667 4.11793 11.3305 3.20246 10.787 2.46363C12.2427 3.23556 13.4264 4.47419 14.1667 6C12.8508 8.69855 10.2958 10.375 7.49999 10.375Z"
                                            fill="#00C1FE" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>Karthi</td>
                                <td>First</td>
                                <td>00012223</td>
                                <td class="text-nowrap">DHS 100,000</td>
                                <td class="text-nowrap">DHS 500,000</td>
                                <td class="text-nowrap">05-Jan, 2022</td>
                                <td></td>
                                <td>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.49999 6.875C7.94201 6.875 8.36594 6.69063 8.6785 6.36244C8.99106 6.03425 9.16665 5.58913 9.16665 5.125C9.16665 4.66087 8.99106 4.21575 8.6785 3.88756C8.36594 3.55937 7.94201 3.375 7.49999 3.375C7.47394 3.375 7.45103 3.38156 7.42577 3.38293C7.50608 3.61516 7.52164 3.86664 7.47063 4.10783C7.41961 4.34903 7.30413 4.56994 7.13774 4.74465C6.97136 4.91935 6.76096 5.04061 6.53125 5.09417C6.30154 5.14774 6.06205 5.1314 5.84087 5.04707C5.84087 5.07441 5.83332 5.09848 5.83332 5.125C5.83332 5.35481 5.87643 5.58238 5.96019 5.7947C6.04394 6.00702 6.16671 6.19993 6.32147 6.36244C6.63403 6.69063 7.05796 6.875 7.49999 6.875ZM14.9094 5.60078C13.4971 2.70754 10.7013 0.75 7.49999 0.75C4.29868 0.75 1.50207 2.70891 0.0906108 5.60105C0.0310383 5.72479 0 5.86149 0 6.00014C0 6.13878 0.0310383 6.27549 0.0906108 6.39922C1.50285 9.29246 4.29868 11.25 7.49999 11.25C10.7013 11.25 13.4979 9.29109 14.9094 6.39895C14.9689 6.27521 15 6.13851 15 5.99986C15 5.86122 14.9689 5.72451 14.9094 5.60078ZM7.49999 1.625C8.15926 1.625 8.80372 1.83027 9.35188 2.21486C9.90005 2.59944 10.3273 3.14607 10.5796 3.78561C10.8319 4.42515 10.8979 5.12888 10.7693 5.80782C10.6407 6.48675 10.3232 7.11039 9.85701 7.59987C9.39083 8.08936 8.79689 8.4227 8.15029 8.55775C7.50368 8.6928 6.83346 8.62349 6.22437 8.35858C5.61529 8.09367 5.09469 7.64507 4.72842 7.0695C4.36215 6.49392 4.16665 5.81723 4.16665 5.125C4.16762 4.19705 4.51912 3.3074 5.14403 2.65125C5.76894 1.99509 6.61623 1.62601 7.49999 1.625ZM7.49999 10.375C4.70415 10.375 2.14946 8.69855 0.833319 6C1.57354 4.47419 2.7573 3.23556 4.21301 2.46363C3.66952 3.20246 3.33332 4.11793 3.33332 5.125C3.33332 6.28532 3.77231 7.39812 4.55371 8.21859C5.33511 9.03906 6.39492 9.5 7.49999 9.5C8.60505 9.5 9.66486 9.03906 10.4463 8.21859C11.2277 7.39812 11.6667 6.28532 11.6667 5.125C11.6667 4.11793 11.3305 3.20246 10.787 2.46363C12.2427 3.23556 13.4264 4.47419 14.1667 6C12.8508 8.69855 10.2958 10.375 7.49999 10.375Z"
                                            fill="#00C1FE" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>Karthi</td>
                                <td>First</td>
                                <td>00012223</td>
                                <td class="text-nowrap">DHS 100,000</td>
                                <td class="text-nowrap">DHS 500,000</td>
                                <td class="text-nowrap">05-Jan, 2022</td>
                                <td></td>
                                <td>
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.49999 6.875C7.94201 6.875 8.36594 6.69063 8.6785 6.36244C8.99106 6.03425 9.16665 5.58913 9.16665 5.125C9.16665 4.66087 8.99106 4.21575 8.6785 3.88756C8.36594 3.55937 7.94201 3.375 7.49999 3.375C7.47394 3.375 7.45103 3.38156 7.42577 3.38293C7.50608 3.61516 7.52164 3.86664 7.47063 4.10783C7.41961 4.34903 7.30413 4.56994 7.13774 4.74465C6.97136 4.91935 6.76096 5.04061 6.53125 5.09417C6.30154 5.14774 6.06205 5.1314 5.84087 5.04707C5.84087 5.07441 5.83332 5.09848 5.83332 5.125C5.83332 5.35481 5.87643 5.58238 5.96019 5.7947C6.04394 6.00702 6.16671 6.19993 6.32147 6.36244C6.63403 6.69063 7.05796 6.875 7.49999 6.875ZM14.9094 5.60078C13.4971 2.70754 10.7013 0.75 7.49999 0.75C4.29868 0.75 1.50207 2.70891 0.0906108 5.60105C0.0310383 5.72479 0 5.86149 0 6.00014C0 6.13878 0.0310383 6.27549 0.0906108 6.39922C1.50285 9.29246 4.29868 11.25 7.49999 11.25C10.7013 11.25 13.4979 9.29109 14.9094 6.39895C14.9689 6.27521 15 6.13851 15 5.99986C15 5.86122 14.9689 5.72451 14.9094 5.60078ZM7.49999 1.625C8.15926 1.625 8.80372 1.83027 9.35188 2.21486C9.90005 2.59944 10.3273 3.14607 10.5796 3.78561C10.8319 4.42515 10.8979 5.12888 10.7693 5.80782C10.6407 6.48675 10.3232 7.11039 9.85701 7.59987C9.39083 8.08936 8.79689 8.4227 8.15029 8.55775C7.50368 8.6928 6.83346 8.62349 6.22437 8.35858C5.61529 8.09367 5.09469 7.64507 4.72842 7.0695C4.36215 6.49392 4.16665 5.81723 4.16665 5.125C4.16762 4.19705 4.51912 3.3074 5.14403 2.65125C5.76894 1.99509 6.61623 1.62601 7.49999 1.625ZM7.49999 10.375C4.70415 10.375 2.14946 8.69855 0.833319 6C1.57354 4.47419 2.7573 3.23556 4.21301 2.46363C3.66952 3.20246 3.33332 4.11793 3.33332 5.125C3.33332 6.28532 3.77231 7.39812 4.55371 8.21859C5.33511 9.03906 6.39492 9.5 7.49999 9.5C8.60505 9.5 9.66486 9.03906 10.4463 8.21859C11.2277 7.39812 11.6667 6.28532 11.6667 5.125C11.6667 4.11793 11.3305 3.20246 10.787 2.46363C12.2427 3.23556 13.4264 4.47419 14.1667 6C12.8508 8.69855 10.2958 10.375 7.49999 10.375Z"
                                            fill="#00C1FE" />
                                    </svg>
                                </td>
                            </tr>



                        </tbody>
                    </table> -->
                    <table class="table table-hover table-striped">
                        <thead >
                             <tr style=" display: none; "> 
                                <th scope="col">pour accessibilité </th>
                                <th scope="col">pour accessibilité</th>
                                <th scope="col">pour accessibilité</th>
                                <th scope="col">pour accessibilité</th>
                                <th scope="col">pour accessibilité</th>
                                <th scope="col">pour accessibilité</th>
                                <th scope="col">pour accessibilité</th> 

                            </tr> 
                        </thead>
                        <tbody class="border-top-0">
                             <tr>
                                <td class="text-secondary">Name</td>
                                <td class="text-secondary">Payment Schedule</td>
                                <td class="text-secondary">Bill Number</td>
                                <td class="text-secondary">Amount Paid</td>
                                <td class="text-secondary">Balance amount</td>
                                <td class="text-secondary" colspan="2">Date</td>
                            </tr>
                            <tr>
                                <td class="text-black">Karthi</td>
                                <td class="text-black">First</td>
                                <td class="text-black">00012223</td>
                                <td class="text-black">DHS 100,000</td>
                                <td class="text-black">DHS 500,000</td>
                                <td class="text-black">05-Jan,2022</td>
                                <td><i class="bi bi-eye text-info"></i></td>
                            </tr>
                            <tr>
                                <td class="text-black">Karthi</td>
                                <td class="text-black">First</td>
                                <td class="text-black">00012223</td>
                                <td class="text-black">DHS 100,000</td>
                                <td class="text-black">DHS 500,000</td>
                                <td class="text-black">05-Jan,2022</td>
                                <td><i class="bi bi-eye text-info"></i></td>
                            </tr>
                            <tr>
                                <td class="text-black">Karthi</td>
                                <td class="text-black">First</td>
                                <td class="text-black">00012223</td>
                                <td class="text-black">DHS 100,000</td>
                                <td class="text-black">DHS 500,000</td>
                                <td class="text-black">05-Jan,2022</td>
                                <td><i class="bi bi-eye text-info"></i></td>
                            </tr>
                            <tr>
                                <td class="text-black">Karthi</td>
                                <td class="text-black">First</td>
                                <td class="text-black">00012223</td>
                                <td class="text-black">DHS 100,000</td>
                                <td class="text-black">DHS 500,000</td>
                                <td class="text-black">05-Jan,2022</td>
                                <td><i class="bi bi-eye text-info"></i></td>
                            </tr>

                        </tbody>
                    </table>  
                </div>
                </div>
            </div>
            <!-- /.content-wrapper -->


            <!-- Main Footer -->
            <!-- <footer class="main-footer">
        </footer> -->
        </div>
    </main>
    <!-- Bootstrap 5 -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        function togglesidebar() {
            //querySelecteur selection element
            var sidebar = document.querySelector(".myside-bar");
            sidebar.classList.toggle("toggle-myside-bar");
        }
    </script>

</html>