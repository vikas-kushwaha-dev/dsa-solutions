class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        $set = [];

        for($i = 0; $i < count($nums); $i++){
            $sum = $target - $nums[$i];
            if(array_key_exists($sum,$set)){
                return [$set[$sum],$i];
            }

            $set[$nums[$i]] = $i;
        }
        return [];
    }
}