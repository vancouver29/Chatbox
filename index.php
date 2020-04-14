<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CHAT BOX</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Chatbox</h1>
            </header>
            <div id="chats">
                <ul>
                    <li class="chat"><span>10:15Pm - </span>Brad: Hey what are you guys up to? </li>
                    <li class="chat"><span>10:15Pm - </span>Brad: Hey what are you guys up to? </li>
                    <li class="chat"><span>10:15Pm - </span>Brad: Hey what are you guys up to? </li>
                    <li class="chat"><span>10:15Pm - </span>Brad: Hey what are you guys up to? </li>
                    <li class="chat"><span>10:15Pm - </span>Brad: Hey what are you guys up to? </li>
                    <li class="chat"><span>10:15Pm - </span>Brad: Hey what are you guys up to? </li>
                </ul>
            </div>
            <div id="input">
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter Your Name" />
                    <input type="text" name="message" placeholder="Enter A Message" />
                    <br />
                    <input type="submit" name="submit" value="Submit" />
                </form>
            </div>
        </div>
    </body>
</html>
