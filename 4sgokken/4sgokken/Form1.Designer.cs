namespace _4sgokken
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.txbGebruikersNaam = new System.Windows.Forms.TextBox();
            this.txbWachtwoord = new System.Windows.Forms.TextBox();
            this.btnInloggen = new System.Windows.Forms.Button();
            this.btnRegistreren = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize) (this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            //
            // pictureBox1
            //
            this.pictureBox1.Image = ((System.Drawing.Image) (resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(244, 38);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(236, 104);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.pictureBox1.TabIndex = 0;
            this.pictureBox1.TabStop = false;
            this.pictureBox1.Click += new System.EventHandler(this.pictureBox1_Click);
            //
            // label1
            //
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(151, 160);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(87, 13);
            this.label1.TabIndex = 1;
            this.label1.Text = "Gebruikersnaam:";
            //
            // label2
            //
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(167, 194);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(71, 13);
            this.label2.TabIndex = 2;
            this.label2.Text = "Wachtwoord:";
            //
            // txbGebruikersNaam
            //
            this.txbGebruikersNaam.Location = new System.Drawing.Point(244, 157);
            this.txbGebruikersNaam.Name = "txbGebruikersNaam";
            this.txbGebruikersNaam.Size = new System.Drawing.Size(236, 20);
            this.txbGebruikersNaam.TabIndex = 3;
            this.txbGebruikersNaam.TextChanged += new System.EventHandler(this.txbGebruikersNaam_TextChanged);
            //
            // txbWachtwoord
            //
            this.txbWachtwoord.Location = new System.Drawing.Point(244, 191);
            this.txbWachtwoord.Name = "txbWachtwoord";
            this.txbWachtwoord.Size = new System.Drawing.Size(236, 20);
            this.txbWachtwoord.TabIndex = 4;
            this.txbWachtwoord.TextChanged += new System.EventHandler(this.txbWachtwoord_TextChanged);
            //
            // btnInloggen
            //
            this.btnInloggen.Location = new System.Drawing.Point(244, 229);
            this.btnInloggen.Name = "btnInloggen";
            this.btnInloggen.Size = new System.Drawing.Size(109, 23);
            this.btnInloggen.TabIndex = 5;
            this.btnInloggen.Text = "Inloggen";
            this.btnInloggen.UseVisualStyleBackColor = true;
            this.btnInloggen.Click += new System.EventHandler(this.btnInloggen_Click);
            //
            // btnRegistreren
            //
            this.btnRegistreren.Location = new System.Drawing.Point(359, 229);
            this.btnRegistreren.Name = "btnRegistreren";
            this.btnRegistreren.Size = new System.Drawing.Size(121, 23);
            this.btnRegistreren.TabIndex = 6;
            this.btnRegistreren.Text = "Registreren";
            this.btnRegistreren.UseVisualStyleBackColor = true;
            this.btnRegistreren.Click += new System.EventHandler(this.btnRegistreren_Click);
            //
            // Form1
            //
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.btnRegistreren);
            this.Controls.Add(this.btnInloggen);
            this.Controls.Add(this.txbWachtwoord);
            this.Controls.Add(this.txbGebruikersNaam);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.pictureBox1);
            this.Name = "Form1";
            this.Text = "Form1";
            ((System.ComponentModel.ISupportInitialize) (this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();
        }

        #endregion

        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txbGebruikersNaam;
        private System.Windows.Forms.TextBox txbWachtwoord;
        private System.Windows.Forms.Button btnInloggen;
        private System.Windows.Forms.Button btnRegistreren;
    }
}

