<?php
$strTitle = basename(dirname(__DIR__));
?>
<html>
<head>
<title><?= $strTitle?></title>
</head>
<body style="background-color: #ddd;">

	<div id="main"
		style="width: 800px; margin-left: auto; margin-right: auto; background-color: #fff; padding: 0 20px; font-family: ubuntu, helvetica, sans-serif;">
		<h1>
			<?= $strTitle?>
		</h1>
		<div id="pdepend">
			<span><img src="/pdepend/dependencies.svg"> </span> <span><img
				src="/pdepend/overview-pyramid.svg"> </span>
		</div>

		<table style="margin-top: 1em; margin-left: 1em;">
			<tbody>
				<tr>
					<td><a href="cloverphp"><img width="48" height="48"
							src="http://jenkins:8080/static/c20f1e72/plugin/cloverphp/clover_48x48.png"
							alt="" style="margin-right: 1em"> </a></td>
					<td style="vertical-align: middle"><a href="cloverphp">Clover HTML
							Report</a></td>
				</tr>
				<tr>
					<td><a href="API_Documentation"><img width="48" height="48"
							src="http://jenkins:8080/static/c20f1e72/images/48x48/graph.gif"
							alt="" style="margin-right: 1em"> </a></td>
					<td style="vertical-align: middle"><a href="api/">API
							Documentation</a></td>
				</tr>
				<tr>
					<td><a href="Code_Browser"><img width="48" height="48"
							src="http://jenkins:8080/static/c20f1e72/images/48x48/graph.gif"
							alt="" style="margin-right: 1em"> </a></td>
					<td style="vertical-align: middle"><a href="code-browser/">Code
							Browser</a></td>
				</tr>
			</tbody>
		</table>
	</div>

</body>
</html>
