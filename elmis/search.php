<?php
$PageTitle = "����� �� �����";
include("header.php");
?>

<!-- Atomz Advanced Search HTML for Elmis -->
<form method="get" action="http://search.atomz.com/search/" name="frm_search">
<table cellspacing=0 cellpadding=1 border=0>
<tr><td colspan=4><p>
<b>������:</b><br>
<input type=hidden size=35 name="sp-q">
<input size=35 name="sp-q2">
<!-- The "Search" button -->
<input type=button value="�����" onclick="submit_search()">
<!--
<input type=submit value="�����">
-->
<input type=hidden name="sp-a" value="sp10021504">
</p></td></tr>
<input type=hidden name="sp-advanced" value=1>
<!-- Allow "any," "all," or "phrase" -->
<tr><td valign=top><p>
<b>�� ����������:&nbsp;</b>
</p></td><td colspan=4><p>
<input type=radio name="sp-p" value="any" >������&nbsp;�����
<input type=radio name="sp-p" value="all" checked>����&nbsp;����
<input type=radio name="sp-p" value="phrase">�����&nbsp;�������<br>
<!-- Checkbox enables sound-alike matching -->
<input type=hidden name="sp-w-control" value=1>
<input type=checkbox name="sp-w" value="alike" checked>
�������&nbsp;�������&nbsp;�����
</p></td></tr>
<!-- Date range criteria -->
<tr><td><p><b>����������:</b></p></td>
<td colspan=4><p>
<input type=radio name="sp-d" value="custom" checked>
<select name="sp-date-range" size=1>
<option value=-1 selected>�&nbsp;�����&nbsp;�����</option>
<option value=7>��&nbsp;���������&nbsp;������
</option>
<option value=14>��&nbsp;���&nbsp;������
</option>
<option value=30>��&nbsp;�����
</option>
<option value=60>��&nbsp;���&nbsp;������
</option>
<option value=90>��&nbsp;���&nbsp;������
</option>
<option value=180>��&nbsp;�����&nbsp;�������
</option>
<option value=365>��&nbsp;���
</option>
<option value=730>��&nbsp;���&nbsp;����
</option>
</select>
</p></td></tr>
<tr><td><p>&nbsp;</p></td>
<td rowspan=2><p>
<input type=radio name="sp-d" value=specific></p></td>
<td align=right><p>�:</p></td><td><p>
<select name="sp-start-day" size=1>
<option value=0 selected></option>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
<option value=6>6</option>
<option value=7>7</option>
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
<option value=17>17</option>
<option value=18>18</option>
<option value=19>19</option>
<option value=20>20</option>
<option value=21>21</option>
<option value=22>22</option>
<option value=23>23</option>
<option value=24>24</option>
<option value=25>25</option>
<option value=26>26</option>
<option value=27>27</option>
<option value=28>28</option>
<option value=29>29</option>
<option value=30>30</option>
<option value=31>31</option>
</select>
<select name="sp-start-month" size=1>
<option value=0 selected></option>
<option value=1>������</option>
<option value=2>�������</option>
<option value=3>�����</option>
<option value=4>������</option>
<option value=5>���</option>
<option value=6>����</option>
<option value=7>����</option>
<option value=8>�������</option>
<option value=9>��������</option>
<option value=10>�������</option>
<option value=11>������</option>
<option value=12>�������</option>
</select>
<input size=4 name="sp-start-year">
</p></td></tr>
<tr><td><p>&nbsp;</p></td><td align=right><p>��:</p></td><td><p>
<select name="sp-end-day" size=1>
<option value=0 selected></option>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
<option value=6>6</option>
<option value=7>7</option>
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
<option value=17>17</option>
<option value=18>18</option>
<option value=19>19</option>
<option value=20>20</option>
<option value=21>21</option>
<option value=22>22</option>
<option value=23>23</option>
<option value=24>24</option>
<option value=25>25</option>
<option value=26>26</option>
<option value=27>27</option>
<option value=28>28</option>
<option value=29>29</option>
<option value=30>30</option>
<option value=31>31</option>
</select>
<select name="sp-end-month" size=1>
<option value=0 selected></option>
<option value=1>������</option>
<option value=2>�������</option>
<option value=3>�����</option>
<option value=4>������</option>
<option value=5>���</option>
<option value=6>����</option>
<option value=7>����</option>
<option value=8>�������</option>
<option value=9>��������</option>
<option value=10>�������</option>
<option value=11>������</option>
<option value=12>�������</option>
</select>
<input size=4 name="sp-end-year">
</p></td></tr>
<!-- List box selects the search field -->
<tr><td valign=top><p>
<b>������� ������:&nbsp;</b>
</p></td><td colspan=4><p><select name="sp-x" size=1>
<option value="any">�����</option>
<option value="title">��������� ����������</option>
<option value="desc">�������� ����������</option>
<option value="keys">�������� �����</option>
<option value="body" selected>����� ����������</option>
<option value="alt">�����������</option>
<option value="url">URL</option>
</select>
</p></td></tr>
<!-- List box selects number of results to show per page -->
<tr><td valign=top><p>
<b>����������:&nbsp;</b>
</p></td><td colspan=4><p><select name="sp-c" size=1>
<option value=5>5</option>
<option value=10 selected>10</option>
<option value=25>25</option>
<option value=50>50</option>
<option value=100>100</option>
</select>&nbsp;�����������&nbsp;
<!-- Show or hide summaries in search results -->
<select name="sp-m" size=1>
<option value=1 selected>� ����������</option>
<option value=0>��� ��������</option>
</select><br>
</p></td></tr>
<!-- Sort results by score or by date -->
<tr><td valign=top><p>
<b>�����������&nbsp;��:&nbsp;</b>
</p></td><td colspan=4><p><select name="sp-s" size=1>
<option value=0 selected>�������������</option>
<option value=1>���� ����������</option>
</select>
</p></td></tr>
</table>
<input type=hidden name="sp-f" value="windows-1251">
</form>


 
<?php
include("footer.php");
?>

