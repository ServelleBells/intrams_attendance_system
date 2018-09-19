<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .sign-in{
                float: left;
                height: auto;
                background-color: white;
                margin-top: 4%;
                width: 100%;
            }
            .wrapper{
                margin: 0 auto;
                width: 30%;
                clear: both;
                font-family: century gothic;
            }
            .content{
                height: auto;
                float: left;
                margin-top: 50%;
                width: 90%;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
                padding: 5%;
            }
            input[type=text]{
                width: 60%;
                padding: 10px 15px;
                color: black;
                display: inline-block;
                font-family: century gothic;
                border: 1px solid #ccc;
                border-radius: 4px;
                background: rgb(255, 255, 255); /* Fallback for older browsers without RGBA-support */
                background: rgba(255, 255, 255, 0.8);
            }
            button.dropbtn{
                width: auto;
                background-color: #335fa1;
                color: white;
                font-family: century gothic;
                padding: 10px 15px;
                border: 1px solid #ccc ;
                border-radius: 4px;
                cursor: pointer;
            }
            button.dropbtn:hover {
                background-color: #3a6ab2;
                color: white;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
            }
            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 200px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
            }
            .attendance-table{
                float: left;
                height: auto;
                background-color: white;
                margin-top: 1%;
                width: 100%;
            }
            .table-wrapper{
                margin: 0 auto;
                width: 90%;
                clear: both;
                font-family: century gothic;
            }
            .table-content{
                float: left;
                height: auto;
                background-color: white;
                width: 90%;
                padding: 5%;
            }
            table {
                margin-top: 10%;
                width: 100%;
                border-collapse: collapse;
                font-family: century gothic;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
            }

            td.table-navigation {
                width: 200px;
                border: 1px solid black;
                padding: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="sign-in">
            <div class="wrapper">
                <div class="content">
                    <input type="text" name="student_id" value="" placeholder="Student ID"/>
                    <div class="dropdown">
                      <button class="dropbtn">Submit</button>
                      <div class="dropdown-content">
                        <a href="#">Time In Morning</a>
                        <a href="#">Time Out Morning</a>
                        <a href="#">Time In Afternoon</a>
                        <a href="#">Time Out Afternoon</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="attendance-table">
            <div class="table-wrapper">
                <div class="table-content">
                    <table border="1">
                        <thead>
                            <tr>
                                <td class="table-navigation">Name</td>
                                <td class="table-navigation">Time In Morning</td>
                                <td class="table-navigation">Time Out Morning</td>
                                <td class="table-navigation">Time In Afternoon</td>
                                <td class="table-navigation">Time Out Afternoon</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
