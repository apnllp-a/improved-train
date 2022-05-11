<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/waitconfirm.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap");
    </style>
    <title>ยืนยันการสมัครสมาชิก</title>
</head>

<body>
    <div class="staff">
        <?php include("nav_it.html"); ?>
    </div>
    <center>
        <h4>รอการยืนยันการสมัครสมาชิก</h4>
        <div class="table">
            <table id="myTable">
            <input id='myInput' onkeyup='searchTable()' type='text' class="search1">
                <thead>
                    <tr>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">นามสกุล</th>
                        <th scope="col">Username</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">แผนก</th>
                        <th scope="col">สิทธิ์</th>
                        <th scope="col">Confirm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">a</td>
                        <td scope="row">Mark</td>
                        <td scope="row">Otto</td>
                        <td scope="row">@mdo</td>
                        <td scope="row">Otto</td>
                        <td scope="row">
                        <div class="dropdown">
                                <button class="dropbtn">เลือกสิทธิ์</button>
                                <div class="dropdown-content">
                                    <a href="#">IT</a>
                                    <a href="#">HR</a>
                                    <a href="#">Header</a>
                                    <a href="#">PCR</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#">
                                <ion-icon name="checkmark" class="ic1"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="close" class="ic2"></ion-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">b</td>
                        <td scope="row">bnm</td>
                        <td scope="row">uuo</td>
                        <td scope="row">@ll</td>
                        <td scope="row">kkkp</td>
                        <td scope="row">
                        <div class="dropdown">
                                <button class="dropbtn">เลือกสิทธิ์</button>
                                <div class="dropdown-content">
                                    <a href="#">IT</a>
                                    <a href="#">HR</a>
                                    <a href="#">Header</a>
                                    <a href="#">PCR</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#">
                                <ion-icon name="checkmark" class="ic1"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="close" class="ic2"></ion-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">a</td>
                        <td scope="row">Mark</td>
                        <td scope="row">Otto</td>
                        <td scope="row">@mdo</td>
                        <td scope="row">Otto</td>
                        <td scope="row">
                        <div class="dropdown">
                                <button class="dropbtn">เลือกสิทธิ์</button>
                                <div class="dropdown-content">
                                    <a href="#">IT</a>
                                    <a href="#">HR</a>
                                    <a href="#">Header</a>
                                    <a href="#">PCR</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#">
                                <ion-icon name="checkmark" class="ic1"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="close" class="ic2"></ion-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">a</td>
                        <td scope="row">Mark</td>
                        <td scope="row">Otto</td>
                        <td scope="row">@mdo</td>
                        <td scope="row">Otto</td>
                        <td scope="row">
                        <div class="dropdown">
                                <button class="dropbtn">เลือกสิทธิ์</button>
                                <div class="dropdown-content">
                                    <a href="#">IT</a>
                                    <a href="#">HR</a>
                                    <a href="#">Header</a>
                                    <a href="#">PCR</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#">
                                <ion-icon name="checkmark" class="ic1"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="close" class="ic2"></ion-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">a</td>
                        <td scope="row">Mark</td>
                        <td scope="row">Otto</td>
                        <td scope="row">@mdo</td>
                        <td scope="row">Otto</td>
                        <td scope="row">
                        <div class="dropdown">
                                <button class="dropbtn">เลือกสิทธิ์</button>
                                <div class="dropdown-content">
                                    <a href="#">IT</a>
                                    <a href="#">HR</a>
                                    <a href="#">Header</a>
                                    <a href="#">PCR</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#">
                                <ion-icon name="checkmark" class="ic1"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="close" class="ic2"></ion-icon>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>
    <form>
        <input type="button" value="Refresh" onClick="javascript:location.reload();" class="refresh" />
    </form>
    <script>
function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>
    <script></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>