<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function validarUsuario($login,$password)
	{
		$this->db->select('*');
		$this->db->from('empleado');
		$this->db->where('login',$login);
		$this->db->where('password',$password);
		return $this->db->get();
		//$this->db->where('tipo',$tipo);
		//$this->db->where('estado',$estado);
	}	
	
public function validarPassw($idEmpleado,$password)
	{
		$this->db->select('*');
		$this->db->from('empleado'); 
		$this->db->where('idEmpleado',$idEmpleado);
		$this->db->where('password',$password);
		return $this->db->get();
		//$this->db->where('tipo',$tipo);
		//$this->db->where('estado',$estado);
	}

public function validarPersona($ci)
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('ci',$ci);
		return $this->db->get();
		//$this->db->where('tipo',$tipo);
		//$this->db->where('estado',$estado);
	}

	//PERSONAL_MODEL

	public function listarperfilEmpleado($id)
	{ 
		$this->db->select('*');
		$this->db->from('empleado e');
		$this->db->join('persona p','e.idPersona = p.idPersona');
		$this->db->where('e.idEmpleado',$id);
		return $this->db->get();
	}

	public function listarperfilSocio($id)
	{ 
		$this->db->select('*');
		$this->db->from('persona p');
		$this->db->join('socio s','p.idPersona = s.idPersona');
		$this->db->join('vehiculo v','s.idSocio = v.idSocio');
		$this->db->where('s.idSocio',$id);
		return $this->db->get();
	}
	
	public function listarControlSocio($id,$fechaInicio,$fechaFinal)
	{ 
		$valor=0;
		$this->db->select('*');
		// $this->db->from('persona p');
		// $this->db->join('socio s','p.idPersona = s.idPersona');
		$this->db->from('vehiculo v');
		$this->db->join('informellegada c','v.idVehiculo = c.idVehiculo');
		$this->db->join('parada p','c.idParada = p.idParada');
		$this->db->join('ruta r','c.idRuta = r.idRuta');
		$this->db->join('tiempos t','p.idParada = t.idParada','r.idRuta = t.idRuta');
		$this->db->where('c.idVehiculo',$id);
		$this->db->where('c.fecha >=',$fechaInicio);
		$this->db->where('c.fecha <=',$fechaFinal);
		$this->db->where('c.horaLlegada >',$valor);
		$this->db->order_by('c.idControl');
		return $this->db->get();
	}
	public function listarpersonal()
	{ 
		$valor=1;
		$this->db->select('*');
		$this->db->from('empleado e');
		$this->db->join('persona p','e.idPersona = p.idPersona');
		$this->db->where('e.estado',$valor);
		return $this->db->get();
	}
	public function listarvehiculo()
	{ 
		$valor=1;
		$this->db->select('*');
		$this->db->from('vehiculo ');
		$this->db->where('estado',$valor);
		return $this->db->get();
	}

		public function listarpersonal2()
	{ 
		$valor=0;
		$this->db->select('*');
		$this->db->from('empleado e');
		$this->db->join('persona p','e.idPersona = p.idPersona');
		$this->db->where('e.estado',$valor);
		return $this->db->get();
	}
//
	public function listarsocio()
	{ 
		$valor=1;
		$this->db->select('*');
		$this->db->from('socio s');
		$this->db->join('persona p','s.idPersona = p.idPersona');
		$this->db->where('s.estado',$valor);
		return $this->db->get();
	}

		public function listarsocio2()
	{ 
		$valor=0;
		$this->db->select('*');
		$this->db->from('socio s');
		$this->db->join('persona p','s.idPersona = p.idPersona');
		$this->db->where('s.estado',$valor);
		return $this->db->get();
	}
//listarparada
	public function listarruta()
	{ 
		$valor=1;
		$this->db->select('*');
		$this->db->from('ruta r');
		$this->db->join('sentido s','r.idSentido = s.idSentido');
		$this->db->where('r.estado',$valor);
		return $this->db->get();
	}
	public function listarruta2()
	{ 
		$valor=1;
		$this->db->select('*');
		$this->db->from('ruta r');
		$this->db->join('sentido s','r.idSentido = s.idSentido');
		$this->db->where('r.estado',$valor);
		return $this->db->get();
	}
	public function listarparada()
	{ 
		$valor=1;
		$this->db->select('*');
		$this->db->from('parada');
		$this->db->where('estado',$valor);
		return $this->db->get();
	}
	public function listarOBS()
	{ 
		$valor=1;
		$this->db->select('*');
		$this->db->from('observacion o');
		$this->db->join('multa m','o.idMulta = m.idMulta');
		$this->db->where('o.estado',$valor);
		return $this->db->get();
	}
	public function listarOBS2()
	{ 
		$valor=0;
		$this->db->select('*');
		$this->db->from('observacion o');
		$this->db->join('multa m','o.idMulta = m.idMulta');
		$this->db->where('o.estado',$valor);
		return $this->db->get();
	}
		public function listarparada2()
	{ 
		$valor=0;
		$this->db->select('*');
		$this->db->from('parada');
		$this->db->where('estado',$valor);
		return $this->db->get();
	}
	public function recuperarpersonal($id)
	{
		
		$this->db->select('*');
		$this->db->from('empleado e');
		$this->db->join('persona p','e.idPersona = p.idPersona');
		$this->db->where('p.idPersona',$id);
		return $this->db->get();
	}

	public function recuperarsocio($id)
	{
		
		$this->db->select('*');
		$this->db->from('socio s');
		$this->db->join('persona p','s.idPersona = p.idPersona');
		$this->db->where('s.idPersona',$id);
		return $this->db->get();
	}

	public function recuperarfoto($id)
	{
		$this->db->select('*');
		$this->db->from('personal');
		$this->db->where('idpersonal',$id);
		return $this->db->get();
	}
	
	public function modificarPasw($id,$data1)
	{
		$this->db->where('idEmpleado',$id);
		$this->db->update('empleado',$data1);
	}

	public function modificarpersona1($id,$data)
	{
		$this->db->where('idPersona',$id);
		$this->db->update('persona',$data);
	}

	public function modificarpersona2($id,$data1)
	{
		$this->db->where('idPersona',$id);
		$this->db->update('empleado',$data1);
	}

	public function modificarsocio1($id,$data)
	{
		$this->db->where('idPersona',$id);
		$this->db->update('persona',$data);
	}

	public function modificarsocio2($id,$data1)
	{
		$this->db->where('idPersona',$id);
		$this->db->update('socio',$data1);
	}

	public function subirpersonal($id,$data)
	{
		$this->db->where('idpersonal',$id);
		$this->db->update('personal',$data);
	}

	public function agregarP($data)
	{
		
		$this->db->select('*');
		$this->db->from('personal');
		$this->db->where('ci',$ci);
		return $this->db->get();
		
		
	}
	public function agregarVehiculoBD($data1)
	{
		
		$this->db->insert('vehiculo',$data1);
		return $this->db->insert_id();
		
	}
	public function agregarPersona($data)
	{
		
		$this->db->insert('persona',$data);
		return $this->db->insert_id();
	}
	public function agregarParada($data1)
	{
		
		$this->db->insert('parada',$data1);
		return $this->db->insert_id();
	}
	
	public function agregarObsModels($data)
	{
		
		$this->db->insert('observacion',$data);
	}
	public function agregarCargoModels($data1)
	{
		
		$this->db->insert('multa',$data1);
	}
	public function agregarRuta($data)
	{
		
		$this->db->insert('ruta',$data);
		return $this->db->insert_id();
	}
	public function agregarTiempo($data)
	{
		
		$this->db->insert('tiempos',$data);
		return $this->db->insert_id();
	}
	public function agregarEmpleado($data1)
	{
		
		$this->db->insert('empleado',$data1);
		
	}
	public function agregarSocio($data1)
	{
		
		$this->db->insert('socio',$data1);
		
	}
	public function agregarUsu($data)
	{ 
		
		$this->db->insert('usuario',$data);
		
	}

	public function eliminarpersonal($id)
	{
		$this->db->where('idpersonal',$id);
		$this->db->delete('personal');
	}

	public function eliminarlogicopersonal($id,$data)
	{
		$this->db->where('idPersona',$id);
		$this->db->update('empleado',$data);
	}
	public function eliminarlogicoOBS($id,$data)
	{
		$this->db->where('idObservacion',$id);
		$this->db->update('observacion',$data);
	}
	public function eliminarlogicosocio($id,$data)
	{
		$this->db->where('idPersona',$id);
		$this->db->update('socio',$data);
	}
	public function actantiguedadpersonal($data)
	{
		$this->db->update('personal',$data);
	}

	public function recuperar()
	{
		$this->db->select('fechaIngreso');
		$this->db->from('personal');
		return $this->db->get();
	}
}
