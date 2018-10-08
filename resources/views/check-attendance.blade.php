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
                margin-top: 2%;
                width: 100%;
            }
            .wrapper{
                margin: 0 auto;
                width: 50%;
                clear: both;
                font-family: century gothic;
            }
            .content{
                height: auto;
                float: left;
                margin-top: 20%;
                width: 90%;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
                padding: 5%;
            }
            input[type=text]{
                width: 50%;
                padding: 10px 15px;
                color: black;
                display: inline-block;
                font-family: century gothic;
                border: 1px solid #ccc;
                border-radius: 4px;
                background: rgb(255, 255, 255); /* Fallback for older browsers without RGBA-support */
                background: rgba(255, 255, 255, 0.8);
            }
            .content select[type=text], select {
                width: 30%;
                padding: 10px 15px;
                color: black;
                margin: 8px 0;
                display: inline-block;
                font-family: century gothic;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                background: rgb(255, 255, 255); /* Fallback for older browsers without RGBA-support */
                background: rgba(255, 255, 255, 0.8);
            }
            button{
                width: auto;
                background-color: #335fa1;
                color: white;
                font-family: century gothic;
                padding: 10px 15px;
                border: 1px solid #ccc ;
                border-radius: 4px;
                cursor: pointer;
            }
            button:hover {
                background-color: #3a6ab2;
                color: white;
                box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1);
            }
            hr {
                margin-top: 20px;
                margin-bottom: 20px;
                border: 0;
                border-top: 1px solid #eee;
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
                margin-top: 5%;
                background-color: white;
                width: 90%;
                padding: 5%;
            }
            table {
                margin-top: 3%;
                width: 100%;
                border-collapse: collapse;
                font-family: century gothic;
            }

            th.table-navigation-name{
                width: 300px;
                border: 1px solid #ddd;
                border-bottom: 3px solid #ddd;
                box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1);
                padding: 15px;
                text-align: center;
            }
            th.table-navigation{
                width: 150px;
                border: 1px solid #ddd;
                border-bottom: 3px solid #ddd;
                box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1);
                padding: 15px;
                text-align: center;
            }
            td{
                padding: 12px;
                text-align: center;
                border: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <div class="sign-in">
            <div class="wrapper">
                <div class="content">
                    <input type="text" name="student_id" value="" placeholder="Student ID"/>
                    <select type="text">
                    <option value="">Time In Morning</option>
                    <option value="">Time Out Morning</option>
                    <option value="">Time In Afternoon</option>
                    <option value="">Time Out Afternoon</option>
                </select>
                <button type="submit">Submit</button>
                </div>
            </div>
        </div>
        <div class="attendance-table">
            <div class="table-wrapper">
                <div class="table-content">
                    <hr>
                    <center><h2>Attendance Table</h2></center>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="table-navigation-name">Name</th>
                                <th class="table-navigation">Time In Morning</th>
                                <th class="table-navigation">Time Out Morning</th>
                                <th class="table-navigation">Time In Afternoon</th>
                                <th class="table-navigation">Time Out Afternoon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
