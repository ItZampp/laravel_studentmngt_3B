@extends('layouts.app')

@section('content')
<div class="res-container">
        <div class="res-left">
            <img src="{{ asset('images/pic1.jpeg') }}" alt="Profile Picture" width="110px" height="110px" style="border-radius: 50%; border: 3px solid white; margin-left:110px;">
            <h2 style="text-align: center;">MATA SAMUEL C.</h2>

            <h3 class="title">Contact</h3>
            <hr>
            <p>#PUROK 2, Meysulao, Calumpit, Bulacan</p>
            <p>📞 +63 950 581 8208</p>
            <p>✉️ leumascalantas@gmail.com</p>

            <h3 class="title">Work Experience</h3>
            <hr>
            <p>N/A</p>

            <h3 class="title">Languages</h3>
            <hr>
            <ul>
                <li>Filipino</li>
                <li>English</li>
            </ul>

            <h3 class="title">Skills</h3>
            <hr>
            <ul>
                <li>Ability to work individually and as part of a team</li>
                <li>Fast learner and adaptable</li>
                <li>Good listener and communicator</li>
            </ul>
        </div>

        <div class="res-rigth" style="margin-top: 20px;">

            <h3 class="title" id="perso">Personal Information</h3>
            <div class="info">
                <div class="info-left">
                    <p><strong>Birth Date :</strong></p>
                    <p><strong>Birth Place :</strong></p>
                    <p><strong>Civil Status:</strong></p>
                    <p><strong>Gender:</strong></p>
                    <p><strong>Religion:</strong></p>
                    <p><strong>Mother:</strong></p>
                    <p><strong>Father:</strong></p>
                </div>
                <div class="info-right">
                    <p>MARCH 14, 2005</p>
                    <p>CALUMPIT, BULACAN</p>
                    <p>SINGLE</p>
                    <p>MALE</p>
                    <p>BORN AGAIN-CHRISTIAN</p>
                    <p>MRS. EDELIZA C. MATA </p>
                    <p>MR. JOEL G. MATA</p>
                </div>
            </div>

                <h3 class="section-title" id="edu">Educational Background</h3>
            <div class="info">
                <div class="info-left">
                    <p><strong>Secondary :</strong></p>
                    <p><strong>Primary :</strong></p>
                </div>
                <div class="info-right">
                    <p>San Miguel-Meysulao High School</p>
                    <p>San Miguel, Calumpit, Bulacan</p>
                    <p>Senior High-General Academic Strand</p>
                    <p>(2021-2023)</p>
                    <p>San Miguel-Meysulao High School</p>
                    <p>Junior High School</p>
                    <p>San Miguel, Calumpit, Bulacan</p>
                    <p>(2017-2021)</p>
                    <p>Meysulao Elementary School</p>
                    <p>Meysulao, Calumpit, Bulacan</p>
                    <p>(2011-2017)</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Poppins', sans-serif;
            color: #2c3e50;
            box-sizing: border-box;
        }

        .res-container{
            max-width: 1000px;
            margin: 50px auto;
            display: flex;
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .res-left{
            width: 40%;
            background: gray;
            color: #fff;
            padding: 40px 30px;
            border-radius: 15px 0 0 15px;
        }

        .res-left h2 {
            margin-top: 10px;
        }

        .res-left h3{
            line-height: 5px;
            margin-top: 40px;
        }

        .res-left p{
            line-height: 10px;
            color: black;
            font-size: 14px;
            margin-left: 30px;
        }

        .res-left ul{
            line-height: 25px;
            color: black;
            font-size: 14px;
        }

        .res-rigth{
            width: 60%;
            padding: 40px 50px;
        }

        .info {
            width: 100%;
            display: flex;
        }

        .info-left{
            width: 35%;
        }

        .info-rigth{
            width: 65%;
        }

        .res-rigth h3{
            line-height:50px;
            color: gray;
        }

        .res-rigth p{
            line-height: 13px;
            font-size: 15px;
            margin-left: 30px;
        }

    </style>
@endsection
