<?php

if ($HTTP_POST_VARS["action"]=="���������") {
	$header='MIME-Version: 1.0'.chr(10).'Content-Type: text/plain;'.chr(10).'  charset="koi8-r"'.chr(10).'From: Elmis Website Visitor <guest@elmis.by>';
	$subj = convert_cyr_string('������� � ������','w','k');
	$body="���: ".$HTTP_POST_VARS["name"];
	$body=$body."\nE-mail: ".$HTTP_POST_VARS["email"];
	$body=$body."\n������: ".$HTTP_POST_VARS["question"];
	$body=$body."\n\n";
	$body=convert_cyr_string($body,'w','k'); 
	mail('Elmis <design@elmis.by>', $subj, $body, $header);
}

$PageTitle = "�������������";
include("header.php");
?>
<p>��� ������ ���������. ���� ����������� ����������� ���� �� ���� ������������� �����.
<hr size="1" noshade><p>
<p><a href="supp.02.php"><img src="art/bull-link2.gif" width="6" height="7" alt="" border="0" hspace="5">��������� �� �������� "������� � ������"</a><p>

<?php
include("footer.php");
?>
