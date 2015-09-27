<!-- this is an html template -->

<h1>Polo!</h1>

<!-- just checking that this works -->
<p>You requested this path: <?php echo $request->getPathInfo() ?> </p>

<p>The file which executed to bring you this message (ie $_SERVER['SCRIPT_FILENAME']) is: <?php echo $_SERVER['SCRIPT_FILENAME'] ?>.</p>  

<p>Naturally, exposing this much system information constitutes a security risk and we'd never actually do anything like this in the wild.</p>


