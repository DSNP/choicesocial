<?php
/* 
 * Copyright (c) 2007-2011, Adrian Thurston <thurston@complang.org>
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

?>

<table><tr>

<td id="leftcol">

<div class="content">

<h3>DSNP Content-Manager One <?php echo$CFG['SITE'];?></h3>

<p>

</div>
</td>

<td id="activity">

<div class="content">
<h2>Users</h2>
<p>
<?php

foreach ( $users as $row ) {
	$user = $row['user'];
	echo $this->siteLink( $user, "/$user/" );
	echo '<br>';
}
?>
</div>
</td>
</tr>
</table>
