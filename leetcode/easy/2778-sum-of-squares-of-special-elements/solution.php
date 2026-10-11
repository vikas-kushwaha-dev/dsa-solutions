class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfSquares($nums) {
        $size = count($nums);
        $total = 0;
        for ($i = 1; $i <= $size; $i++){
            $num = $i;
            if($size % $num == 0){
                $total += $nums[$i-1] * $nums[$i-1];
            }
        }

        return $total;
    }
}