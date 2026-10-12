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

        $officer = 0;
        $no_of_unquie = 1;
        // $cm = 1;

        for ($cm = 1; $cm < $n; $cm++){
            if($nums[$cm - 1] != $nums[$cm]){
                $nums[$officer + 1] = $nums[$cm];
                $officer++;
                $no_of_unquie++;
            }else{
                continue;
            }
        }

        return $no_of_unquie;
    }
}