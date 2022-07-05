using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace _4sgokken
{
    public partial class Register : Form
    {
        private object lbError;

        public Register()
        {
            InitializeComponent();
        }

        private void Form3_Load(object sender, EventArgs e)
        {

        }

        private void btnRegistreren_Click(object sender, EventArgs e)
        {
            if (txbGebruikersnaam.Text.Length == 0 || txbEmail.Text.Length == 0 || txbWachtwoord.Text.Length == 0)
            {
                lblError.Text = "Vul alle velden in";
            }
            else
            {
                var Home = new Home();
                this.Hide();
                Home.Show(this);
            }
        }

        private void lblBack_Click(object sender, EventArgs e)
        {
            var loginForm = new Login();
            this.Hide();
            loginForm.Show(this);
        }

        private void txbGebruikersnaam_TextChanged(object sender, EventArgs e)
        {
            
        }
    }
}
