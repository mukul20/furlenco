
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
                font-size: 1.125em;
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
            .pad-r0 {
                padding-right: 0;
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
            .ft-24 {
                font-size: 1.5em;
            }
            .ft-26 {
                font-size: 1.625em;
            }
            .ft-40 {
                font-size: 2.5em;
            }
            .ft-56 {
                font-size: 3.5em;
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
            .fl-bg-red {
                background:#feefea;
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
            .footer {
                padding: 2.8rem 4rem;
                border-top: 1px solid #e9e9e9;
                line-height:0;
            }
            @media screen and (max-width: 480px) {
                .pad-standard {
                    padding: 2.5rem 2.5rem 2rem 2.5rem;
                }
                .footer {
                    padding: 1.5rem 2.5rem;
                }
                .ft-40 {
                    font-size: 2em;
                }
                .ft-56 {
                    font-size: 3em;
                }
                th.pad-1 {
                    padding: 0.5rem;
                }
                td.pad-1-5.xs-shrink {
                    padding: 0.8rem;
                }
            }
        </style>
    </head>
    <div style="background:#f0f0ef;">
        @yield('content')
    </div>
</html>
