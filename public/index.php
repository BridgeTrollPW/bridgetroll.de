<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="static/main.css" />
</head>
<body>
    <textarea id="console" autofocus value="">
		

__________        .__    .___               ___________             .__  .__   
\______   \_______|__| __| _/ ____   ____   \__    ___/______  ____ |  | |  |  
 |    |  _/\_  __ \  |/ __ | / ___\_/ __ \    |    |  \_  __ \/  _ \|  | |  |  
 |    |   \ |  | \/  / /_/ |/ /_/  >  ___/    |    |   |  | \(  <_> )  |_|  |__
 |______  / |__|  |__\____ |\___  / \_____>   |____|   |__|   \____/|____/____/
        \/                \/_____/                                           


	</textarea>
</body>
<script type="text/javascript">
var buffer = '';
document.addEventListener('keypress', (event) => {
    if (event.keyCode == 13) {
        var input = document.querySelector('#console').innerHTML.split('\n');
        var lastCom = input[input.length-2];
        console.log(input);
    }
});

printLine('test');

function printLine (str) {
    for (var i = 0; i < str.length; i++)
    {
        setTimeout(() => {
            document.getElementById('console').innerHtml += str.charAt(i);
        }, 100);
    }
}
</script>
</html>