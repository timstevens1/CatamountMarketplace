<!DOCTYPE html>
<?php
//############################################################################
// find name in uvm directory      
function ldapName($uvmID) {
    if (empty($uvmID))
        return "no:netid";

    $name = "not:found";

    $ds = ldap_connect("ldap.uvm.edu");

    if ($ds) {
        $r = ldap_bind($ds);
        $dn = "uid=$uvmID,ou=People,dc=uvm,dc=edu";
        $filter = "(|(netid=$uvmID))";
        $findthese = array("sn", "givenname");

        // now do the search and get the results which are stored in $info
        $sr = ldap_search($ds, $dn, $filter, $findthese);
        
        // if we found a match (in this example we should actually always find just one
        if (ldap_count_entries($ds, $sr) > 0) {
            $info = ldap_get_entries($ds, $sr);
            $name = $info[0]["givenname"][0] . " " . $info[0]["sn"][0];
        }
    }

    ldap_close($ds);

    return $name;
}
$userNetId = "ckweston";

$userName = ldapName($userNetId);

echo($userName);

?><html>
<?php include("top.php");?>

<body>
<?php include("header.php");?>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello UVM2 from my local git repo!"; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
			</td>
		</tr>
	</table>
</body>
</html>
