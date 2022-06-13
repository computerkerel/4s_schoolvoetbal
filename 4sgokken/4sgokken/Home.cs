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
    public partial class Home : Form
    {
        public Home()
        {
            InitializeComponent();
        }

        private void lblSummary_Click(object sender, EventArgs e)
        {
            var summaryForm = new SummaryForm();
            this.Hide();
            summaryForm.Show(this);
        }

        private void lblStake_Click(object sender, EventArgs e)
        {
            var gamesFrom = new GamesForm();
            this.Hide();
            gamesForm.Show(this);
        }

        private void lblLogout_Click(object sender, EventArgs e)
        {
            var Home = new HomeForm();
            this.Hide();
            loginForm.Show(this);
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            var Home = new HomeForm();
            this.Hide();
            Home.Show(this);
        }
    }
}
