<!DOCTYPE html>

<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- JQUERY -->
    <script src='https://code.jquery.com/jquery-3.3.1.js' integrity='sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60='
        crossorigin='anonymous'></script>
    <!-- Semantic-UI -->
    <link rel='stylesheet' text='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css'>
    <!-- Custom CSS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <!--font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="/css/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">
   

    <title>Lambda | Class 16</title>
</head>

<body onload="getStudents()">

    <!-- NAVBAR -->
    <nav id='push-down'>
        <div id="check" class="ui inverted attached stackable menu ">
            <div class="ui container ">
                <!-- fix this small issue, do a search but the home link was not responding. fixed-->
                <a class="item" href="index.html">
                    <i class="home icon"></i> Home
                </a>
                <a class="item">
                    <i class="grid layout icon"></i> Browse Projects
                </a>
            </div>
            <!-- SEARCH -->
            <div class="right menu">
                <div class='item'>
                    <div class="ui transparent icon input">
                        <input class="prompt" type="text" placeholder="Search students..." id="search" onkeyup="setFilter(); filterStudents()">
                        <i class="users icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
            </div>
        </div>
    </nav>

    <div id="main-container">
        <main>
            <div class="container">
                <div class='console-container'>
                    <span id='text'></span>
                    <div class='console-underscore' id='console'>&#95;</div>
                </div>
            </div>
            <div class="ui six doubling cards centered raised link student">
            </div>
        </main>

        <footer>

        </footer>
    </div> <!-- MAIN CONTAINER-->



    <script>
        var filter = '';
        function setFilter() {
            filter = document.getElementById('search').value.toUpperCase();
        }

        var studentList = [];
        getStudents = () => {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: 'students.json',
                success: data => {
                    data.map(student => {
                        $(".student").append(`
            <div class="card">
              <div class="image">
                <img src="${student.avatar}">
              </div>
              <div class="content">
                <a class="header">${student.name}</a>
                <a class="header" href="https://github.com/${student.githubHandle}">Github: ${student.githubHandle}</a>
              </div>
            </div>
            `
                        )
                    })
                    createDataArray(data);
                },
            })
        }

        function createDataArray(data) {
            studentList = data;
        }

        // filtering function used with the json object retrieved from the AJAX call
        function filterStudents() {
            var cards = $('.card');
            for (var i = 0; i < studentList.length; i++) {
                if (studentList[i].name.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>
    <script src="/js/script.js"></script>

</html>
