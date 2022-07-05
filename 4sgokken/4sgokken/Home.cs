using _4sgokken.Models;
using REST_Voetbal.Models;
using REST_Voetbal.Repositories;
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
            //var summaryForm = new SummaryForm();
            //this.Hide();
            //summaryForm.Show(this);
        }

        private void lblStake_Click(object sender, EventArgs e)
        {
            var gamesFrom = new Games();
            this.Hide();
            gamesFrom.Show(this);
        }

        private void lblLogout_Click(object sender, EventArgs e)
        {
            var home = new Home();
            this.Hide();
            home.Show(this);
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            var home = new Home();
            this.Hide();
            home.Show(this);
        }

        private async void FetchMatches()
        {
            FifaRepository repo = new FifaRepository();
           // List<MatchModel> matches = await repo.GetMatches();

            List<MatchResult> results = await repo.GetResults();

            //foreach(MatchModel match in matches)
            //{
            //    txbDebugMatches.Text += $"{match.Team1Name} vs {match.Team2Name}";
            //}
            foreach (MatchResult matchResult in results)
            {
                txbDebugMatches.Text += $"{matchResult.Team1Name} vs {matchResult.Team2Name}: {matchResult.Team1Score} - {matchResult.Team2Score}";
            }

        }

        private void btnTest_Click(object sender, EventArgs e)
        {
            FetchMatches();
        }
    }
}
