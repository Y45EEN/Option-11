import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";
import Authenticated from "@/Layouts/AuthenticatedLayout";
import { Inertia } from "@inertiajs/inertia";
import NavBar from "@/Components/NavBar";
import { HSquareFill } from "react-bootstrap-icons";
import { Link } from "@inertiajs/react";

const AdminEditUsers = ({ users }) => {
    const bikePartList = users.map((user) => (
       

    <tr>
    
      <td scope="row">{user.userid}</td>
      <td scope="row">{user.firstname}</td>
      <td scope="row">{user.lastname}</td>

      <td scope="row"><a ) >Edit User</a> <a href={route("adminDeleteUsers", { userid: user.userid }) }>Delete user</a></td>
    
    </tr>

    
  
 
         
    
    ));

    return (
       
            <div className="container">

<table  class="table table-bordered">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  {bikePartList}
  </tbody>
  
</table>
                
            </div>
       
    );
};

export default AdminEditUsers;
