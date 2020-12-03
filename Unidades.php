


    public function nuevo()
    {
        $data = ['titulo' => 'Agregar unidad'];

        echo view('header');
        echo view ('unidades/nuevo', $data);
        echo view ('footer');
    }


    public function insertar()
    {
        if($this->request->getMethod()=="POST" && $this->validate(['nombre =>''required','nombre_corto'=> 'required'])){

    }
        $this->unidades->save(['nombre'=>$this->request->getPost('nombre'),'nombre_corto'=>
         $this->request->getPost('nombre_corto')]);
        return redirect()->to (base_url().'/unidades');
        } else {
            $data = ['titulo' => 'Agregar unidad', 'validation' => $this->validator];

        echo view('header');
        echo view ('unidades/nuevo', $data);
        echo view ('footer');
        }
    }

    public function editar($id)
    {
    $unidad = $this->unidades->where('id',$id)->first();
    $data = ['titulo'-> 'Editar unidad', 'datos' => $unidad];

    echo view ('header');
    echo view ('unidades/editar', $data);
    echo view ('footer');
    }