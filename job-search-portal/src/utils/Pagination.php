class Pagination {
    private $currentPage;
    private $totalItems;
    private $itemsPerPage;

    public function __construct($currentPage, $totalItems, $itemsPerPage = 10) {
        $this->currentPage = $currentPage;
        $this->totalItems = $totalItems;
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getTotalPages() {
        return ceil($this->totalItems / $this->itemsPerPage);
    }

    public function getOffset() {
        return ($this->currentPage - 1) * $this->itemsPerPage;
    }

    public function createLinks($link) {
        $totalPages = $this->getTotalPages();
        $links = '';

        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $this->currentPage) {
                $links .= "<span>$i</span> "; // Current page
            } else {
                $links .= "<a href='$link?page=$i'>$i</a> "; // Other pages
            }
        }

        return $links;
    }
}