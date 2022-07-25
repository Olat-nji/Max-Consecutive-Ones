//Given a binary array nums, return the maximum number of consecutive 1's in the array.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        
        $no=0;
        $highest=0;
        
     foreach($nums as $num)   {
         if($num==1){
             $no=$no+1;
             $chighest=$no;
         }else{
             $chighest=$no;
         
            $no=0;
         
         }
         if($chighest>$highest){
             $highest=$chighest;
         }
        
         
     }
        
        return $highest;
    }
}
