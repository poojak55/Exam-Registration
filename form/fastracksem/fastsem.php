<?php session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> FastSem form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
    .scroll,
    .profile {

        height: 700px;
        background: linear-gradient(to top right, #575757 5%, #a3a3a3 41%);


    }

    .profile .btn:hover {

        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }


    .sembtn,
    .fastbtn {
        background: #c70039;
        color: white;

    }

    .exam .btn {
        font-size: 30px;
        height: 100px;
    }

    .login .btn {

        height: 50px;
        font-size: 24px;
    }

    html {
        margin: 0;
    }

    #submit,
    #submitsem {
        background-color: #cc0e74;
        height: 70px;
        width: 270px;
        font-size: 30px;
        color: white;
        margin-top: 40px;
        margin-bottom: 30px;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
    }

    .day,
    .month {
        color: #660569;
    }

    .sub {
        background-color: #cc0e74;
        height: 80px;
        font-size: 30px;
        color: white;

    }

    .with-arrow .nav-link.active {
        position: relative;
    }

    .with-arrow .nav-link.active::after {
        content: '';
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #ff6666;
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
        display: block;
    }



    .lined .nav-link {
        border: none;
        border-bottom: 3px solid transparent;
        background-color: transparent !important;
    }

    .lined .nav-link:hover {
        border: none;
        border-bottom: 3px solid transparent;
    }

    .lined .nav-link.active {
        background: none;
        color: #555;
        border-color: whitesmoke;
    }

    .paypal,
    .gpay,
    .applepay,
    .amazonpay {
        background-color: #cc0e74;
        color: white;
        margin: 2px;
    }

    .form-check-label {

        font-weight: 400;



    }

    #contact {
        font-size: 20px;
        font-weight: 500;
    }

    a:hover {
        text-decoration: none;
    }

    @media (min-width:320px) and (max-width:425px) {

        .scroll,
        .profile {

            height: 700px;
            background: linear-gradient(to top right, #575757 5%, #a3a3a3 41%);
            overflow-y: scroll;
            overflow-x: scroll;

        }
    }

    @media (min-width:320px) and (max-width:768px) {
        h1 {
            text-align: center;
        }
    }
</style>

<body>

    <div class="container ">
        <script>
            $(document).ready(function() {
                $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
                var semthree = ["Microprocessors and Microcontrollers", "Computer Organization and Architecture", "Logic Design", "Data Structures", "Statistics and Discrete Mathematics", "Object Oriented Java Programming", "Environmental Studies"];
                var semfour = ["Linear Algebra", "Theoretical Foundations of Computations", "Database Management Systems", "Analysis and Design of Algorithms", "Operating systems", "Constitution of India"];
                var semfive = ["Artificial Intelligence", "Computer Networks", "Unix Shell and System Programming", "Software Engineering", "Software Project Management and Finance", "Internet of Things", "Advanced Java and J2EE", "Advanced Data Structures", "Advanced Algorithms", "System Software and Compiler Design", "Advanced Computer Architecture"];
                var semsix = ["Machine Learning", "Cryptography and Network Security", "Object Oriented Modelling and Design", "Management and Entrepreneurship", "Cloud Computing", "Big Data Analytics", "Natural Language Processing", "Java Programming", "Robot Process Automation Design and Development"];
                var semseven = ["Biology for Engineers", "Cyber Law , Forensics and IPR", "Block Chain", "NoSQL Database", "Multimedia Computing", "Distributed Systems", "Software Architecture and Design Patterns", "Cloud Computing", " Data Science", "Python Programming", "Industry Motivated Course"];
                var semeight = ["Green Computing", " Cloud Computing", "Big Data Analytics"];
                var threecred = [4, 3, 3, 4, 4, 4, 2];
                var fourcred = [4, 4, 4, 4, 4, 2];
                var fivecred = [4, 4, 4, 3, 2, 3, 3, 3, 3, 3, 3];
                var sixcred = [4, 4, 4, 3, 4, 4, 4, 3, 3];
                var sevencred = [2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1];
                var eightcred = [2, 3, 3];

                $("#cal").click(function() {
                    var cred = 0;
                    var fees = 0;


                    for (var i = 0; i < 11; i++) {
                        if ($("#" + (i + 1)).is(":checked")) {
                            if ($('#three').is(':checked')) {
                                cred += threecred[i];

                            } else if ($('#four').is(':checked')) {
                                cred += fourcred[i];
                            } else if ($('#five').is(':checked')) {
                                cred += fivecred[i];
                            } else if ($('#six').is(':checked')) {
                                cred += sixcred[i];
                            } else if ($('#seven').is(':checked')) {
                                cred += sevencred[i];
                            } else {
                                cred += eightcred[i];
                            }


                            fees += 1500;
                        }


                    }

                    $("#credits").val(cred);
                    $("#fees").val(fees);
                    check_cred(cred);
                });

                function check_cred(cred) {
                    if (cred == '0' || cred == '') {
                        $("#cred1").html("*Choose subjects to Register.");
                        $("#cred1").show();
                        return true;
                    } else {
                        $("#cred1").hide();
                        return false;

                    }
                }
                $("#three").click(function() {

                    $("div").remove(".form-check");
                    ID = 3;
                    for (var i = 0; i < 4; i++) {
                        $("#colone").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]"' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semthree[i] + '">' + semthree[i] + '</label></div>');
                    }
                    for (var i = 4; i < 7; i++) {
                        $("#coltwo").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]"' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semthree[i] + '">' + semthree[i] + '</label></div>');
                    }


                });

                $("#four").click(function() {

                    $("div").remove(".form-check");
                    ID = 4;
                    for (var i = 0; i < 3; i++) {
                        $("#colone").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]"' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semfour[i] + '">' + semfour[i] + '</label></div>');
                    }
                    for (var i = 3; i < 6; i++) {
                        $("#coltwo").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]"' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semfour[i] + '">' + semfour[i] + '</label></div>');
                    }
                });


                $("#five").click(function() {

                    $("div").remove(".form-check");
                    ID = 5;
                    for (var i = 0; i < 6; i++) {
                        $("#colone").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]"' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semfive[i] + '">' + semfive[i] + '</label></div>');
                    }
                    for (var i = 6; i < 11; i++) {
                        $("#coltwo").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]"' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semfive[i] + '">' + semfive[i] + '</label></div>');
                    }
                });


                $("#six").click(function() {
                    ID = 6;
                    $("div").remove(".form-check");

                    for (var i = 0; i < 5; i++) {
                        $("#colone").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]" ' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semsix[i] + '">' + semsix[i] + '</label></div>');
                    }
                    for (var i = 5; i < 9; i++) {
                        $("#coltwo").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox" name="checkArr[]" ' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semsix[i] + '">' + semsix[i] + '</label></div>');
                    }
                });



                $("#seven").click(function() {
                    ID = 7;
                    $("div").remove(".form-check");

                    for (var i = 0; i < 6; i++) {
                        $("#colone").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]" ' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semseven[i] + '">' + semseven[i] + '</label></div>');
                    }
                    for (var i = 6; i < 11; i++) {
                        $("#coltwo").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]"' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semseven[i] + '">' + semseven[i] + '</label></div>');
                    }
                });



                $("#eight").click(function() {

                    $("div").remove(".form-check");

                    for (var i = 0; i < 3; i++) {
                        $("#colone").append(' <div class="form-check"><label class="form-check-label"><input type="checkbox"  name="checkArr[]" ' + 'id="' + (i + 1) + '"' + 'class="form-check-input"' + 'value="' + semeight[i] + '">' + semeight[i] + '</label></div>');
                    }

                });




            });
        </script>
        <form id="registration" method="POST" action="fast_Validate.php">
            <div class="row mx-3">
                <div class="col">
                    <label for="Name">Name:</label>
                    <?php if (isset($nameErr)) { ?>
                        <span class="text-danger">*<?php echo $nameErr; ?></span>
                    <?php } ?>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">



                    <label for="USN">USN:</label>
                    <?php if (isset($usnErr)) { ?>
                        <span class="text-danger">*<?php echo $usnErr; ?></span>
                    <?php } ?>
                    <input type="text" class="form-control" id="usn" name="usn" value="<?php echo isset($_POST["usn"]) ? $_POST["usn"] : ''; ?>">

                    <label for="email">Email-Id:</label>
                    <?php if (isset($emailErr)) { ?>
                        <span class="text-danger">*<?php echo $emailErr; ?></span>
                    <?php } ?>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">

                    <label for="birthday">DOB:</label>
                    <?php if (isset($dobErr)) { ?>
                        <span class="text-danger">*<?php echo $dobErr; ?></span>
                    <?php } ?>
                    <input type="date" class="form-control" id="birthday" name="dob" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>">







                    <label for="sel1">Semester:</label>
                    <?php if (isset($radioErr)) { ?>
                        <span class="text-danger">*<?php echo $radioErr; ?></span>
                    <?php } ?>

                    <div id="sem" style="font-size: 17px;font-weight: bold;">

                        <div class="form-check-inline ">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="three" name="radio" value="3">3


                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="four" name="radio" value="4">4
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="five" name="radio" value="5">5
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="six" name="radio" value="6">6
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="seven" name="radio" value="7">7
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="eight" name="radio" value="8">8
                            </label>
                        </div>
                    </div>
                    <label for="sub">Choose Subjects to be registered:</label>

                    <span id="sub5" class="text-danger font-weight-bold"></span>
                    <div class="row">
                        <div class="col " id="colone">

                        </div>
                        <div class="col" id="coltwo">

                        </div>
                    </div>













                    <label for="sec">Section:</label>
                    <?php if (isset($secErr)) { ?>
                        <span class="text-danger">*<?php echo $secErr; ?></span>
                    <?php } ?>

                    <input type="text" class="form-control" id="sec" name="section" value="<?php echo isset($_POST["section"]) ? $_POST["section"] : ''; ?>">


                    <label for="cred">Total Credits:</label>
                    <?php if (isset($credErr)) { ?>
                        <span class="text-danger">*<?php echo $credErr; ?></span>
                    <?php } ?>
                    <input type="text" class="form-control" name="Credits" id="credits" readonly>
                    <label for="fee">Total Exam Fee:</label>
                    <input type="text" class="form-control " name="examfee" id="fees" readonly>
                    <div class="p-3">
                        <button type="button" class=" btn  shadow-sm mx-auto d-block  " id="cal" style="background:#cc0e74;color:white"> Calculate Credits and Fees </button>
                    </div>










                    <button type="submit" class=" btn  btn-block  shadow-sm mx-auto" id="submitsem"> SUBMIT </button>
        </form>

    </div>


    </div>







</body>

</html>