<?php

if ($HTTP_POST_VARS["action"]=="���������") {
	$header='MIME-Version: 1.0'.chr(10).'Content-Type: text/plain;'.chr(10).'  charset="koi8-r"'.chr(10).'From: Elmis Website Visitor <guest@elmis.by>';
	$subj = convert_cyr_string('�����','w','k');
	$body="�����������: ".$HTTP_POST_VARS["company"];
	$body=$body."\n������: ".$HTTP_POST_VARS["country"];
	$body=$body."\n�������� �����: ".$HTTP_POST_VARS["address"];
	$body=$body."\n���������� ����: ".$HTTP_POST_VARS["contact"];
	$body=$body."\n�������: ".$HTTP_POST_VARS["phone"];
	$body=$body."\n����: ".$HTTP_POST_VARS["fax"];
	$body=$body."\nE-mail: ".$HTTP_POST_VARS["email"];
	$body=$body."\n\n������ ������� �������-������������ ����������� �� �������� ��������� ������������� ������� ��� ������������:".$HTTP_POST_VARS["order"];
	$body=$body."\n\n������ ������� ��������� ���������� � �����, ����������, ����������� �������������� � �������� �������� ��������� ������������� ������� ��� ������������ (������������, ��� � ���������� �������):".$HTTP_POST_VARS["info"];
	$body=$body."\n\n";
	$body=convert_cyr_string($body,'w','k'); 
	mail('Elmis <elmis@elmis.by>', $subj, $body, $header);
}

$PageTitle = "�������������";
include("header.php");
?>
<p>��� ����� ���������. ����������� �������� &laquo;�����&raquo; �������� � ���� � ��������� �����.
<hr size="1" noshade><p>
<p><a href="order.php"><img src="art/bull-link2.gif" width="6" height="7" alt="" border="0" hspace="5">��������� �� �������� "�����"</a><p>



<?php
include("footer.php");
?>
