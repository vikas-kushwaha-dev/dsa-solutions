class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
         $n = count($nums);

    if ($n === 0) {
        return 0;
    }

    $slow = 0;

    for ($fast = 1; $fast < $n; $fast++) {
        if ($nums[$fast] !== $nums[$slow]) {
            $slow++;
            $nums[$slow] = $nums[$fast];
        }
    }

    return $slow + 1;
    }
}