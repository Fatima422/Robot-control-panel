<!DOCTYPE html>
<html lang="en">

    <style>
        
        body {
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            display: flex;
        }
        #B {
            position: relative;
            top: 80px;
            left: -267px;
            color: #20b2aa;
            font-size: 16px;
            padding: 15px 32px;
        }
        #F {
            position: relative;
            top: -80px;
            left: 250px;
            color: #20b2aa;
            font-size: 16px;
            padding: 15px 32px;
        }
        #R {
            position: relative;
            right: -20px;  
            color: #20b2aa;
            font-size: 16px;
            padding: 15px 32px;
        }
        #L {
            position: relative;
            right: 20px;
            color: #20b2aa;
            font-size: 16px;
            padding: 15px 32px;
        }
        #S {
            color: #cd5c5c;
            font-size: 16px;
            padding: 15px 32px;
        }
        
    </style>

    <body>

        <form action="print.php" method="GET">
            <button name="Front"  id="F"> FORWARD </button>
            <button name="Left" id="L"> LEFT </button>
            <button name="Stop" id="S"> STOP </button>
            <button name="Right" id="R"> RIGHT </button>
            <button name="Back" id="B"> BACKWARD</button>
        </form>
        
    </body>

</html>