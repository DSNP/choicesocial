<?php

/* 
 * Copyright (c) 2007-2011 Adrian Thurston <thurston@complang.org>
 *
 * Permission to use, copy, modify, and/or distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 */

require( ROOT . DS . 'view' . DS . 'functions.php' );

?>

<table><tr>

<td id="leftcol">

<div class="content">

<div id="photo_upload">
<form method="post" enctype="multipart/form-data" 
	action="<?php echo $this->userLoc( "/image/upload" ); ?>">
<input name="photo" type="file"/>
<br>
<input type="submit" value="Upload"/>
</form> 
</div>

</div>
</td>

<td id="activity">

<div class="content">

<table>
<?php
$count = 0;
$perRow = 4;
foreach ( $images as $row ) {
	$seqNum = $row['seq_num'];
	if ( $count % $perRow == 0 )
		echo "<tr>\n";

	echo "<td>";

	$img = $this->userImg( "/image/view/thm-$seqNum.jpg", $seqNum );
	echo $this->userLink( $img, "/image/display/img-$seqNum.jpg" );

	echo "</td>\n";

	if ( ($count % $perRow) == ($perRow - 1) )
		echo "</tr>\n";

	$count += 1;
}

if ( $count % $perRow == ($perRow - 1) )
	echo "</tr>\n";
?>
</table>

</div>

</td>

</tr></table>
