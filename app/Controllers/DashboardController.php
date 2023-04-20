class DashboardController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        # cria instancia da library
        $this->load->library('db');

        # cria instancia do helper
        $this->load->helper('url');
    } 


    public function index()
    {
        # cria instancia do model
        $this->load->model("DashboardModel");

        # executa sua função dentro da model e recupera o valor
        $lista = $this->DashboardModel->lista();

        # chama a view (não precisa do .php)
        # o array dentro da função da view, passa as chaves para a view e os transforma em variaveis (extract)
        $this->load->view('dashboard', 
            array(
                 'query' => $lista
            )
        );
    }
}