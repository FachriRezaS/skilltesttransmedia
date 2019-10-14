<?php  

/**
 * summary
 */
class M_data extends CI_Model
{
    /**
     * summary
     */
    public function show_list($data = array())
    {
        return $this->db->get('karyawan')->result();
    }

    public function delete($id = NULL)
	{
		$this->db->delete('karyawan', array('id'=> $id));
	}
}

?>