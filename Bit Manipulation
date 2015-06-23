using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Drawing.Imaging;
using System.IO;
using System.Linq;
using System.Runtime.InteropServices;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Bitsy
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            string teste = "D:\\Users\\Campos\\Desktop\\Ibagens e gifs\\001 (6).jpg";
            System.Drawing.Image imagem = System.Drawing.Image.FromFile(teste);
            imageToByteArray(imagem);
            pictureBox1.Image = imagem;
            pictureBox1.Width = imagem.Width;
            pictureBox1.Height = imagem.Height;

            byte[] hue = imageToByteArray(imagem);

            Random rnd = new Random();

            Console.WriteLine("Teste: {0}", hue[10]);

            for(int i = 0; i < 200000; i++)
            {
                hue[i] = 1;
            }

            for (int i = 200000; i < 800000; i++)
            {
                hue[i] = 10;
            }

            for (int i = 800000; i < 865395; i++)
            {
                hue[i] = 255;
            }

            imagem = byteArrayToImage(hue);

            pictureBox1.Image = imagem;

        }

        public byte[] imageToByteArray(System.Drawing.Image imageIn)
        {
            MemoryStream ms = new MemoryStream();
            imageIn.Save(ms, System.Drawing.Imaging.ImageFormat.Png);
            return ms.ToArray();
        }

        public Image byteArrayToImage(byte[] byteArrayIn)
        {
            int size = (int)Math.Sqrt(byteArrayIn.Length); // Some bytes will not be used as we round down here

            Bitmap bitmap = new Bitmap(size, size, PixelFormat.Format8bppIndexed);
            BitmapData bitmapData = bitmap.LockBits(new Rectangle(0, 0, bitmap.Width, bitmap.Height), ImageLockMode.WriteOnly, bitmap.PixelFormat);

            try
            {
                // Copy byteArrayIn to bitmapData row by row (to account for the case
                // where bitmapData.Stride != bitmap.Width)
                for (int rowIndex = 0; rowIndex < bitmapData.Height; ++rowIndex)
                    Marshal.Copy(byteArrayIn, rowIndex * bitmap.Width, bitmapData.Scan0 + rowIndex * bitmapData.Stride, bitmap.Width);
            }
            finally
            {
                bitmap.UnlockBits(bitmapData);
            }

            return bitmap;
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }
    }
}
