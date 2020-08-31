<?php

class data extends Kontroler
{
    function __construct()
    {
        $this->data = $this->model('m_data');
    }

    function indeks()
    {
        echo "string";
    }

    function master($menu = '', $act = '')
    {
        switch ($menu)
        {
            case 'gedung':
                switch ($act) {
                    case 'detail':
                        $send = $_POST;
                        $acts = $this->data->master('gedung', 'detail', $send);
                        echo json_encode($acts);
                        break;

                    case 'hapus':
                        $send = $_POST;
                        $acts = $this->data->master('gedung', 'hapus', $send);
                        $data = array (
                            'badan' => array (
                                'dtbld' => $this->data->master('gedung')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/gedung', $data);
                        break;

                    case 'id-add':
                        echo $this->data->master('gedung', 'id-add');
                        break;

                    case 'tambah':
                        $send = $_POST;
                        $acts = $this->data->master('gedung', 'tambah', $send);
                        $data = array (
                            'badan' => array (
                                'dtbld' => $this->data->master('gedung')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/gedung', $data);
                        break;

                    case 'update':
                        $send = $_POST;
                        $acts = $this->data->master('gedung', 'update', $send);
                        $data = array (
                            'badan' => array (
                                'dtbld' => $this->data->master('gedung')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/gedung', $data);
                        break;
                    
                    default:
                        $data = array(
                            'title' => 'Data Gedung',
                            'badan' => array(
                                'dtbld' => $this->data->master('gedung')
                            )
                        );
                        $this->tampilkan('pakem/header', $data);
                        $this->tampilkan('pakem/navbar', $data);
                        $this->tampilkan('data/master/gedung', $data);
                        $this->tampilkan('pakem/footer');
                        break;
                }
                break;

            case 'kurikulum' :
                switch ($act) {
                    case 'detail':
                        $send = $_POST;
                        $acts = $this->data->master('kurikulum', 'detail', $send);
                        echo json_encode($acts);
                        break;

                    case 'hapus':
                        $send = $_POST;
                        $acts = $this->data->master('kurikulum', 'hapus', $send);
                        $data = array(
                            'badan' => array(
                                'dtcur' => $this->data->master('kurikulum')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/kurikulum', $data);
                        break;

                    case 'id-add':
                        echo $this->data->master('kurikulum', 'id-add');
                        break;

                    case 'tambah':
                        $send = $_POST;
                        $this->data->master('kurikulum', 'tambah', $send);
                        $data = array(
                            'badan' => array(
                                'dtcur' => $this->data->master('kurikulum')
                            )
                        );
    
                        $this->tampilkan('data/master/after-upt/kurikulum', $data);
                        break;

                    case 'update':
                        $send = $_POST;
                        $acts = $this->data->master('kurikulum', 'update', $send);
                        $data = array(
                            'badan' => array(
                                'dtcur' => $this->data->master('kurikulum')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/kurikulum', $data);
                        break;

                    default:
                        $data = array(
                            'title' => 'Data Kurikulum',
                            'badan' => array(
                                'dtcur' => $this->data->master('kurikulum')
                            )
                        );
                        $this->tampilkan('pakem/header', $data);
                        $this->tampilkan('pakem/navbar', $data);
                        $this->tampilkan('data/master/kurikulum', $data);
                        $this->tampilkan('pakem/footer');
                        break;
                }
                
                break;

            case 'ruangan':
                switch ($act) {
                    case 'detail':
                        $send = $_POST;
                        $acts = $this->data->master('ruangan', 'detail', $send);
                        echo json_encode($acts);
                        break;

                    case 'hapus':
                        $send = $_POST;
                        $acts = $this->data->master('ruangan', 'hapus', $send);
                        $data = array(
                            'badan' => array(
                                'dtrom' => $this->data->master('ruangan'),
                                'dtbld' => $this->data->master('gedung')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/ruangan', $data);
                        break;
                        
                    case 'id-add':
                        echo $this->data->master('ruangan', 'id-add');
                        break;

                    case 'tambah':
                        $send = $_POST;
                        $acts = $this->data->master('ruangan', 'tambah', $send);
                        $data = array(
                            'badan' => array(
                                'dtrom' => $this->data->master('ruangan'),
                                'dtbld' => $this->data->master('gedung'),
                                'hasil' => $acts
                            )
                        );

                        $this->tampilkan('data/master/after-upt/ruangan', $data);
                        break;

                    case 'update':
                        $send = $_POST;
                        $acts = $this->data->master('ruangan', 'update', $send);
                        $data = array(
                            'badan' => array(
                                'dtrom' => $this->data->master('ruangan'),
                                'dtbld' => $this->data->master('gedung')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/ruangan', $data);
                        break;
                    
                    default:
                        $data = array(
                            'title' => 'Data Ruangan',
                            'badan' => array(
                                'dtrom' => $this->data->master('ruangan'),
                                'dtbld' => $this->data->master('gedung')
                            )
                        );
                        $this->tampilkan('pakem/header', $data);
                        $this->tampilkan('pakem/navbar', $data);
                        $this->tampilkan('data/master/ruangan', $data);
                        $this->tampilkan('pakem/footer');
                        break;
                }
                break;

            case 'sekolah':
                switch ($act) {
                    case 'update':
                        $send = $_POST; 
                        $this->data->master('sekolah', 'update', $send);

                        $data = array(
                            'badan' => array(
                                'dtsch' => $this->data->master('sekolah')
                            )
                        );
                        $this->tampilkan('data/master/after-upt/sekolah', $data);
                        break;

                    case 'editor':
                        $data = array(
                            'title' => 'Data Sekolah',
                            'badan' => array(
                                'dtsch' => $this->data->master('sekolah')
                            )
                        );
                        
                        $this->tampilkan('data/master/upt/sekolah', $data);
                        break;
                    
                    default:
                        $data = array(
                            'title' => 'Data Sekolah',
                            'badan' => array(
                                'dtsch' => $this->data->master('sekolah')
                            )
                        );
                        $this->tampilkan('pakem/header', $data);
                        $this->tampilkan('pakem/navbar', $data);
                        $this->tampilkan('data/master/sekolah', $data);
                        $this->tampilkan('pakem/footer');
                        break;
                }
                break;

            case 'tapel':
                switch ($act) {
                    case 'detail':
                        $send = $_POST;
                        $acts = $this->data->master('tapel', 'detail', $send);

                        echo json_encode($acts);
                        break;

                    case 'hapus':
                        $send = $_POST;
                        $acts = $this->data->master('tapel', 'hapus', $send);
                        $data = array (
                            'badan' => array(
                                'dtfys' => $this->data->master('tapel')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/tapel', $data);
                        break;

                    case 'tambah':
                        $send = $_POST;
                        $acts = $this->data->master('tapel', 'tambah', $send);
                        $data = array (
                            'badan' => array(
                                'dtfys' => $this->data->master('tapel')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/tapel', $data);
                        break;

                    case 'update':
                        $send = $_POST;
                        $acts = $this->data->master('tapel', 'update', $send);
                        $data = array (
                            'badan' => array(
                                'dtfys' => $this->data->master('tapel')
                            )
                        );

                        $this->tampilkan('data/master/after-upt/tapel', $data);
                        break;
                    
                    default:
                        $data = array(
                            'title' => 'Data Tahun Pelajaran',
                            'badan' => array(
                                'dtfys' => $this->data->master('tapel')
                            )
                        );
                        $this->tampilkan('pakem/header', $data);
                        $this->tampilkan('pakem/navbar', $data);
                        $this->tampilkan('data/master/tapel', $data);
                        $this->tampilkan('pakem/footer');
                        break;
                }
                break;

            default:
                $data = array(
                    'title' => 'Data Master'
                );
                $this->tampilkan('pakem/header', $data);
                $this->tampilkan('pakem/navbar', $data);
                $this->tampilkan('data/master/index');
                $this->tampilkan('pakem/footer');
                break;
        }
    }
}