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
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
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
