class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $count = count($nums);

        $result = [];
        for($i = 0; $i < $count; $i++){
            // $lastValue = $nums[$i - 1] ?? 0;
            // $currentValue = $nums[$i];
            $sum += $nums[$i];
            array_push($result,$sum);
        }

        return $result;
    }
}