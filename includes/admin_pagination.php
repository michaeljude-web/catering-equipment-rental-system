<?php
function renderPagination($currentPage, $totalPages, $baseUrl) {
    echo '<div class="flex gap-2 items-center mt-4">';
    
    $prevClass = ($currentPage > 1) ? 'bg-gray-200 text-gray-700 hover:bg-gray-300' : 'bg-gray-300 text-gray-500 cursor-not-allowed';
    $prevLink = ($currentPage > 1) ? $baseUrl.($currentPage-1) : '#';
    echo '<a href="'.$prevLink.'" class="px-3 py-1 rounded-lg '.$prevClass.'">Previous</a>';

    for ($i=1; $i<=$totalPages; $i++) {
        $activeClass = ($i === $currentPage) ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300';
        echo '<a href="'.$baseUrl.$i.'" class="px-3 py-1 rounded-lg '.$activeClass.'">'.$i.'</a>';
    }

    $nextClass = ($currentPage < $totalPages) ? 'bg-gray-200 text-gray-700 hover:bg-gray-300' : 'bg-gray-300 text-gray-500 cursor-not-allowed';
    $nextLink = ($currentPage < $totalPages) ? $baseUrl.($currentPage+1) : '#';
    echo '<a href="'.$nextLink.'" class="px-3 py-1 rounded-lg '.$nextClass.'">Next</a>';

    echo '</div>';
}
?>
