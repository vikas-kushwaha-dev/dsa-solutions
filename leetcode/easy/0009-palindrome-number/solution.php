class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x = (string) $x;
        $l = 0;
        $r = strlen($x) - 1;

        while($l <= $r){
            if($x[$l] != $x[$r]){
                return false;
            }
            $l++;
            $r--;
        }
        return true;
    }
}