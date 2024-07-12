<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni DBMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="lib/rgb.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="bg-dark text-light">
    <?php
    include 'lib/db_connect.php';
    include 'lib/navbar.php';
    include 'studentlogin.php';
    include 'adminlogin.php';
    ?>
    <div class="bg-dark my-5">
        <table id="myTable" class="table  text-light table-bordered " style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Roll_no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sem1_GPA</th>
                    <th scope="col">Sem2_GPA</th>
                    <th scope="col">FY_GPA</th>
                    <th scope="col">Sem3_GPA</th>
                    <th scope="col">Sem4_GPA</th>
                    <th scope="col">SY_GPA</th>
                    <th scope="col">Sem5_GPA</th>
                    <th scope="col">Sem6_GPA</th>
                    <th scope="col">TY_GPA</th>
                    <th scope="col">Category</th>
                    <th scope="col">FY FEE</th>
                    <th scope="col">SY FEE</th>
                    <th scope="col">TY FEE</th>
                    <th scope="col">Scholarship</th>
                    <th scope="col">Contact no</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tablename1 = $_GET['tablename'];
                echo  '<div id="tname"  style="display: none;">' . $tablename1 . '</div>
                ';
                $sql = "SELECT * FROM `$tablename1`ORDER BY `Roll_No`;";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;
                    echo "<tr>
        <th scope='row'>" . $sno . "</th>
        <td >" . $row['Roll_No'] . "</td>
        <td >" . $row['Name'] . "</td>
        <td >" . $row['email_id'] . "</td>
        <td >" . $row['sem1_GPA'] . "</td>
        <td >" . $row['sem2_GPA'] . "</td>
        <td >" . $row['FY_GPA'] . "</td>
        <td >" . $row['sem3_GPA'] . "</td>
        <td >" . $row['sem4_GPA'] . "</td>
        <td >" . $row['SY_GPA'] . "</td>
        <td >" . $row['sem5_GPA'] . "</td>
        <td >" . $row['sem6_GPA'] . "</td>
        <td >" . $row['TY_GPA'] . "</td>
        <td >" . $row['Category'] . "</td>
        <td >" . $row['FY_Fee_Reciept_No'] . "</td>
        <td >" . $row['SY_Fee_Reciept_No'] . "</td>
        <td >" . $row['TY_Fee_Reciept_No'] . "</td>
        <td >" . $row['Scholarship_recieved'] . "</td>
        <td >" . $row['Contact_No'] . "</td>
        <td >" . $row['Address'] . "</td>  
        <td><button class='edit btn btn-primary'style='width: 100px; height: 40px;' id='" . $row['Roll_No'] . "'>Edit</button>
        <button class='delete btn btn-danger' style='width: 100px; height: 40px;'id='" . $row['Roll_No'] . "'>Delete</button>
        </td>
      </tr>";
                }
                ?>
            </tbody>
    </div>
    <hr>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>

    <script>
        console.log(tname);
        $(document).on("click", ".edit", function() {
            if ($(this).text() == "Save") {
                var Roll_No = $(this).parents("tr").find("td:eq(0)").text();
                var Name = $(this).parents("tr").find("td:eq(1)").text();
                var email_id = $(this).parents("tr").find("td:eq(2)").text();
                var sem1_GPA = $(this).parents("tr").find("td:eq(3)").text();
                var sem2_GPA = $(this).parents("tr").find("td:eq(4)").text();
                var FY_GPA = $(this).parents("tr").find("td:eq(5)").text();
                var sem3_GPA = $(this).parents("tr").find("td:eq(6)").text();
                var sem4_GPA = $(this).parents("tr").find("td:eq(7)").text();
                var SY_GPA = $(this).parents("tr").find("td:eq(8)").text();
                var sem5_GPA = $(this).parents("tr").find("td:eq(9)").text();
                var sem6_GPA = $(this).parents("tr").find("td:eq(10)").text();
                var TY_GPA = $(this).parents("tr").find("td:eq(11)").text();
                var Category = $(this).parents("tr").find("td:eq(12)").text();
                var FY_Fee_Reciept_No = $(this).parents("tr").find("td:eq(13)").text();
                var SY_Fee_Reciept_No = $(this).parents("tr").find("td:eq(14)").text();
                var TY_Fee_Reciept_No = $(this).parents("tr").find("td:eq(15)").text();
                var Scholarship_recieved = $(this).parents("tr").find("td:eq(16)").text();
                var Contact_No = $(this).parents("tr").find("td:eq(17)").text();
                var Address = $(this).parents("tr").find("td:eq(18)").text();
                var tname = document.getElementById("tname").innerHTML;

                function redirectToPage() {
                    window.location.href = "edit.php?Roll_No=" + Roll_No + "&Name=" + Name + "&email_id=" + email_id + "&sem1_GPA=" + sem1_GPA + "&sem2_GPA=" + sem2_GPA + "&FY_GPA=" + FY_GPA + "&sem3_GPA=" + sem3_GPA + "&sem4_GPA=" + sem4_GPA + "&SY_GPA=" + SY_GPA + "&sem5_GPA=" + sem5_GPA + "&sem6_GPA=" + sem6_GPA + "&TY_GPA=" + TY_GPA + "&Category=" + Category + "&FY_Fee_Reciept_No=" + FY_Fee_Reciept_No + "&SY_Fee_Reciept_No=" + SY_Fee_Reciept_No + "&TY_Fee_Reciept_No=" + TY_Fee_Reciept_No + "&Scholarship_recieved=" + Scholarship_recieved + "&Contact_No=" + Contact_No + "&Address=" + Address + "&tname=" + tname;
                }
                redirectToPage();
            }
            var currentTD = $(this).parents("tr").find("td");
            if ($(this).text() == "Edit") {
                $.each(currentTD, function() {
                    $(this).prop("contenteditable", true);
                });
            } else {
                $.each(currentTD, function() {
                    $(this).prop("contenteditable", false);
                });
            }
            $(this).text($(this).text() == "Edit" ? "Save" : "Edit");
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#myTable').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#myTable_wrapper .col-md-6:eq(0)');
        });
        $(document).on('click', '.delete', function(){
    var rowId = $(this).attr('id');
    var tableName = $('#tname').text();

    if(confirm("Are you sure you want to delete this row?")){
        $.ajax({
            url: 'delete_row.php',
            type: 'post',
            data: {row_id: rowId, table_name: tableName},
            success: function(response){
                location.reload();
            }
        });
    }
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>