class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        sort($nums);
        $n = count($nums);

        $res_sum = $nums[0] + $nums[1] + $nums[2];
$max_diff = abs($res_sum - $target);
        for($i = 0;$i < $n - 2; $i++){
            $l = $i + 1;
            $r = $n - 1;
           
            while($l < $r){
                $sum = $nums[$i] + $nums[$l] + $nums[$r];
                $diff = abs($sum - $target);
                if($diff < $max_diff){
                    $max_diff = $diff;
                    $res_sum = $sum;
                }
                if($sum == $target){
                    return $sum;
                }elseif($sum < $target){
                    $l++;
                }else{
                    $r--;
                }
            }
        }
        return $res_sum;
    }
}