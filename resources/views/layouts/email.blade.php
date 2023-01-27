
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            .fl-container {
                background: #fff;
                width: 640px;
                max-width: 100%;
                margin: 0 auto;
                font-size: 18px;
                font-family: sans-serif;
                color: rgb(34, 34, 34);
                line-height: 1.4;
            }
            .fl-container a {
                color: inherit;
            }
            .fl-container a.fl-yellow {
                color: rgb(255, 221, 75);
            }
            .fl-container img {
                max-width: 100%;
            }
            .pad-standard {
                padding: 3.5rem 4rem 3rem 4rem;
            }
            .pad-1 {
                padding: 0.5rem;
            }
            .pad-1-5 {
                padding: 1.5rem;
            }
            .pad-2-5 {
                padding: 2.5rem;
            }
            .pad-r0 {
                padding-right: 0;
            }
            .p-y2-x4 {
                padding: 2rem 4rem;
            }
            .m-0 {
                margin: 0;
            }
            .mb-0 {
                margin-bottom: 0;
            }
            .mb-10 {
                margin-bottom: 10px;
            }
            .mt-5 {
                margin-top: 5px;
            }
            .in-bl {
                display: inline-block;
            }
            .bold {
                font-weight: bold;
            }
            .ft-16 {
                font-size: 16px;
            }
            .ft-24 {
                font-size: 24px;
            }
            .ft-26 {
                font-size: 26px;
            }
            .ft-40 {
                font-size: 40px;
            }
            .ft-56 {
                font-size: 56px;
            }
            .float-end {
                float: right;
            }
            .fl-color {
                color: #059baa;
            }
            .fl-red {
                color: #ee5921;
            }
            .fl-yellow {
                color: rgb(255, 221, 75);
            }
            .fl-bg {
                background: #059baa;
                color: #fff;
            }
            .fl-bg-white {
                background: #fff;
                color: rgb(34, 34, 34);
            }
            .fl-bg-red {
                background: #feefea;
                color: rgb(34, 34, 34);
            }
            .clear {
                clear: both;
            }
            .text-center {
                text-align: center;
            }
            hr {
                border-top: 1px solid #bcbcbc;
            }
            .row {
                display: flex;
                flex-wrap: wrap;
            }
            .col-5 {
              flex: 0 0 auto;
              width: 41.66666667%;
            }
            .col-7 {
              flex: 0 0 auto;
              width: 58.33333333%;
            }
            .col-9 {
              flex: 0 0 auto;
              width: 75%;
            }
            .logo {
                width: 250px;
            }
            table .img-wrapper {
                background: #fff;
                width: 100px;
                height: 100px;
                text-align: center;
                display: flex;
                justify-content: center;
                border-radius: 1rem;
                -webkit-box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.1);
                -moz-box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.1);
                box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.1);
            }
            table .img-wrapper img {
                margin: auto;
                display: block;
                max-width: 100%;
                max-height: 100%;
            }
            .footer {
                padding: 2.8rem 4rem;
                border-top: 1px solid #e9e9e9;
                line-height:0;
            }
            @media screen and (max-width: 480px) {
                .pad-standard {
                    padding: 3rem 3rem 2.5rem 3rem;
                }
                .footer {
                    padding: 2rem 2.5rem;
                }
                .fl-container {
                    font-size: 16px;
                    border: 1px solid #059baa;
                }
                .ft-16 {
                    font-size: 14px;
                }
                .ft-24 {
                    font-size: 19px;
                }
                .ft-26 {
                    font-size: 22px;
                }
                .ft-40 {
                    font-size: 32px;
                }
                .ft-56 {
                    font-size: 44px;
                }
                .logo {
                    width: 155px;
                }
                table .pad-1 {
                    padding: 0.5rem;
                }
                table .pad-1-5 {
                    padding: 0.9rem;
                }
                table .img-wrapper {
                    width: 60px;
                    height: 60px;
                }
                th.xs-nopad, td.xs-nopad {
                    padding: 0;
                }
            }
            @media screen and (max-width: 390px) {
                .pad-standard {
                    padding: 2.5rem 2rem 2rem 2rem;
                }
                .fl-container {
                    font-size: 14px;
                }
                .ft-24 {
                    font-size: 16px;
                }
                .ft-26 {
                    font-size: 19px;
                }
                .ft-40 {
                    font-size: 28px;
                }
                .ft-56 {
                    font-size: 38px;
                }
                .p-y2-x4 {
                    padding: 1.5rem 2rem;
                }
                .logo {
                    width: 140px;
                }
                .footer {
                    padding: 1.5rem 2rem;
                }
                .pad-2-5 {
                    padding: 2rem;
                }
                td.pad-r0 {
                    padding-right: 0;
                }
            }
        </style>
    </head>
    <div style="background:#f0f0ef;">
        @yield('content')
    </div>
</html>
