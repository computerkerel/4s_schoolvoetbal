namespace _4sgokken
{
    partial class Register
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Register));
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.lblPassword = new System.Windows.Forms.Label();
            this.lblBack = new System.Windows.Forms.Label();
            this.btnRegistreren = new System.Windows.Forms.Button();
            this.txbGebruikersnaam = new System.Windows.Forms.TextBox();
            this.txbEmail = new System.Windows.Forms.TextBox();
            this.txbWachtwoord = new System.Windows.Forms.TextBox();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.lblError = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(57, 147);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(87, 13);
            this.label1.TabIndex = 0;
            this.label1.Text = "Gebruikersnaam:";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(106, 186);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(38, 13);
            this.label2.TabIndex = 1;
            this.label2.Text = "E-mail:";
            // 
            // lblPassword
            // 
            this.lblPassword.AutoSize = true;
            this.lblPassword.Location = new System.Drawing.Point(73, 230);
            this.lblPassword.Name = "lblPassword";
            this.lblPassword.Size = new System.Drawing.Size(71, 13);
            this.lblPassword.TabIndex = 2;
            this.lblPassword.Text = "Wachtwoord:";
            // 
            // lblBack
            // 
            this.lblBack.AutoSize = true;
            this.lblBack.Location = new System.Drawing.Point(152, 310);
            this.lblBack.Name = "lblBack";
            this.lblBack.Size = new System.Drawing.Size(35, 13);
            this.lblBack.TabIndex = 3;
            this.lblBack.Text = "Terug";
            this.lblBack.Click += new System.EventHandler(this.lblBack_Click);
            // 
            // btnRegistreren
            // 
            this.btnRegistreren.Location = new System.Drawing.Point(155, 266);
            this.btnRegistreren.Name = "btnRegistreren";
            this.btnRegistreren.Size = new System.Drawing.Size(144, 23);
            this.btnRegistreren.TabIndex = 4;
            this.btnRegistreren.Text = "Registreer";
            this.btnRegistreren.UseVisualStyleBackColor = true;
            this.btnRegistreren.Click += new System.EventHandler(this.btnRegistreren_Click);
            // 
            // txbGebruikersnaam
            // 
            this.txbGebruikersnaam.Location = new System.Drawing.Point(155, 144);
            this.txbGebruikersnaam.Name = "txbGebruikersnaam";
            this.txbGebruikersnaam.Size = new System.Drawing.Size(144, 20);
            this.txbGebruikersnaam.TabIndex = 5;
            this.txbGebruikersnaam.TextChanged += new System.EventHandler(this.txbGebruikersnaam_TextChanged);
            // 
            // txbEmail
            // 
            this.txbEmail.Location = new System.Drawing.Point(155, 186);
            this.txbEmail.Name = "txbEmail";
            this.txbEmail.Size = new System.Drawing.Size(144, 20);
            this.txbEmail.TabIndex = 6;
            // 
            // txbWachtwoord
            // 
            this.txbWachtwoord.Location = new System.Drawing.Point(155, 227);
            this.txbWachtwoord.Name = "txbWachtwoord";
            this.txbWachtwoord.Size = new System.Drawing.Size(144, 20);
            this.txbWachtwoord.TabIndex = 7;
            // 
            // pictureBox1
            // 
            this.pictureBox1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pictureBox1.BackgroundImage")));
            this.pictureBox1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pictureBox1.Location = new System.Drawing.Point(155, 12);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(144, 113);
            this.pictureBox1.TabIndex = 8;
            this.pictureBox1.TabStop = false;
            // 
            // lblError
            // 
            this.lblError.AutoSize = true;
            this.lblError.Location = new System.Drawing.Point(39, 288);
            this.lblError.Name = "lblError";
            this.lblError.Size = new System.Drawing.Size(35, 13);
            this.lblError.TabIndex = 9;
            this.lblError.Text = "label3";
            // 
            // Register
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(347, 338);
            this.Controls.Add(this.lblError);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.txbWachtwoord);
            this.Controls.Add(this.txbEmail);
            this.Controls.Add(this.txbGebruikersnaam);
            this.Controls.Add(this.btnRegistreren);
            this.Controls.Add(this.lblBack);
            this.Controls.Add(this.lblPassword);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Name = "Register";
            this.Text = "Register";
            this.Load += new System.EventHandler(this.Form3_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label lblPassword;
        private System.Windows.Forms.Label lblBack;
        private System.Windows.Forms.Button btnRegistreren;
        private System.Windows.Forms.TextBox txbGebruikersnaam;
        private System.Windows.Forms.TextBox txbEmail;
        private System.Windows.Forms.TextBox txbWachtwoord;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Label lblError;
    }
}