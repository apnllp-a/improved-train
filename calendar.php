<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index_gen.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap");
    </style>
    <script type="text/javascript">
        function doPopups() {
            if (!document.getElementsByTagName) return false;
            var links = document.getElementsByTagName("th");
            for (var i = 0; i < links.length; i++) {
                if (links[i].className.match("hv")) {
                    links[i].onclick = function() {
                        window.open(
                            this.href,
                            "",
                            "top=40,left=40,width=500,height=300,scrollbars"
                        ); // กำหนดรูปแบบหน้าต่าง POPUP ที่นี่
                        return false;
                    };
                }
            }
        }
        window.onload = doPopups;
    </script>
    <title>หน้าแรก (พนักงานทั่วไป)</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="att">
                            <th scope="col">
                                <h5>Sunday</h5>
                            </th>
                            <th scope="col">
                                <h5>Monday</h5>
                            </th>
                            <th scope="col">
                                <h5>Tuesday</h5>
                            </th>
                            <th scope="col">
                                <h5>Wednesday</h5>
                            </th>
                            <th scope="col">
                                <h5>Thursday</h5>
                            </th>
                            <th scope="col">
                                <h5>Friday</h5>
                            </th>
                            <th scope="col">
                                <h5>Saturday</h5>
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <th class="hv" scope="col">.</th>
                        <th class="hv" scope="col">.</th>
                        <th class="hv" scope="col">1</th>
                        <th class="hv" scope="col">2</th>
                        <th class="hv" scope="col">3</th>
                        <th class="hv" scope="col">4</th>
                        <th class="hv" scope="col">5</th>
                    </tr>

                    <tr>
                        <th class="hv" scope="col">6</th>
                        <th class="hv" scope="col">7</th>
                        <th class="hv" scope="col">8</th>
                        <th class="hv" scope="col">9</th>
                        <th class="hv" scope="col">10</th>
                        <th class="hv" scope="col">11</th>
                        <th class="hv" scope="col">12</th>
                    </tr>
                    <tr>
                        <th class="hv" scope="col">13</th>
                        <th class="hv" scope="col">14</th>
                        <th class="hv" scope="col">15</th>
                        <th class="hv" scope="col">16</th>
                        <th class="hv" scope="col">17</th>
                        <th class="hv" scope="col">18</th>
                        <th class="hv" scope="col">19</th>
                    </tr>
                    <tr>
                        <th class="hv" scope="col">20</th>
                        <th class="hv" scope="col">21</th>
                        <th class="hv" scope="col">22</th>
                        <th class="hv" scope="col">23</th>
                        <th class="hv" scope="col">24</th>
                        <th class="hv" scope="col">25</th>
                        <th class="hv" scope="col">26</th>
                    </tr>
                    <tr>
                        <th class="hv" scope="col">27</th>
                        <th class="hv" scope="col">28</th>
                        <th class="hv" scope="col">29</th>
                        <th class="hv" scope="col">30</th>
                        <th class="hv" scope="col">.</th>
                        <th class="hv" scope="col">.</th>
                        <th class="hv" scope="col">.</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>