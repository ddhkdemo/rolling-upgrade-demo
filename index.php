<?php
$localIP = $_SERVER['SERVER_ADDR'];
$version = "2";


echo "<h3>This page is for OpenShift pod upgrade demo.</h3>";
echo "<table style=\"height: 59px;\" border=\"3\" width=\"294\">";
echo "<tbody>";
echo "<tr>";
echo "<td><strong>Version</strong></td>";
echo "<td style=\"text-align: center;\"><span style=\"color: #0000ff;\"><strong>$version</strong></span></td>";
echo "</tr>";
echo "<tr>";
echo "<td><strong>IP</strong></td>";
echo "<td style=\"text-align: center;\"><span style=\"color: #0000ff;\"><strong>$localIP</strong></span></td>";
echo "</tr>";
echo "<tr>";
echo "<td><strong>Image</strong></td>";
echo "<td><center><img src=\"./green.png\" alt=\"\" width=\"160\" height=\"160\" /></center></td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

?>
