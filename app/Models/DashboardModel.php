class DashboardModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lista()
    {
        $query = $this->db->query('SELECT * FROM products');
        # se vai usar o valor em outro lugar, então pense que o mesmo será um retorno
        return (int) $query->num_rows();       
    }
}