<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Vec Class</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    </head>    
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Cpp_Graphics.php'); ?>

<!-- Right -->
    
  <div id ="rightz">
  
    <h1>Vector Class</h1>

    <h2>Constructing the Vector Class</h2>

    <p>In this section we are going to focus on constructing a class to handle some of the geometric functions of creating shapes and modifying the colors within those shapes. Perhaps its best if I just write the code and then we can break it down afterwards.</p>

    <em>Code:</em>
    <pre class = "code">#ifndef VEC3_H
#define VEC3_H

#include &lt;cmath>
#include &lt;iostream>

using std::sqrt;

class vec3 {

  public:
    <span class = "comments">// Constructors</span>  
    vec3() : e{0,0,0} {}
    vec3(double e0, double e1, double e2) : e{e0, e1, e2} {}

    double x() const { return e[0]; }
    double y() const { return e[1]; }
    double z() const { return e[2]; }

    <span class = "comments">// return the inverse of array</span>
    vec3 operator-() const { return vec3(-e[0], -e[1], -e[2]); }
    <span class = "comments">// subscript operator for our object</span>
    double operator[](int i) const { return e[i]; }
    <span class = "comments">// subscript operator for address of our object</span>
    double& operator[](int i) { return e[i]; }

    <span class = "comments">// compound operators for addition, multiplication and division</span>      
    vec3& operator+=(const vec3 &v) {
      e[0] += v.e[0];
      e[1] += v.e[1];
      e[2] += v.e[2];
      return *this;
    }

    vec3& operator*=(const double t) {
      e[0] *= t;
      e[1] *= t;
      e[2] *= t;
      return *this;
    }

    vec3& operator/=(const double t) {
      return *this *= 1/t;
    }

    <span class = "comments">// return the perimeter of the shape</span>
    double length() const {
      return sqrt(length_squared());
    }

    double length_squared() const {
      return e[0]*e[0] + e[1]*e[1] + e[2]*e[2];
    }

   public:
    double e[3];
};

<span class = "comments">// aliases for vec3 class</span>
using point3 = vec3;
using color = vec3;

<span class = "comments">// ostream operator</span>
inline std::ostream& operator&lt;&lt;(std::ostream &out, const vec3 &v) {
  return out &lt;&lt; v.e[0] &lt;&lt; ' ' &lt;&lt; v.e[1] &lt;&lt; ' ' &lt;&lt; v.e[2];
}

<span class = "comments">// addition, subtraction, multiplication and divison operators</span>
inline vec3 operator+(const vec3 &u, const vec3 &v) {
  return vec3(u.e[0] + v.e[0], u.e[1] + v.e[1], u.e[2] + v.e[2]);
}

inline vec3 operator-(const vec3 &u, const vec3 &v) {
  return vec3(u.e[0] - v.e[0], u.e[1] - v.e[1], u.e[2] - v.e[2]);
}

inline vec3 operator*(const vec3 &u, const vec3 &v) {
  return vec3(u.e[0] * v.e[0], u.e[1] * v.e[1], u.e[2] * v.e[2]);
}

inline vec3 operator*(double t, const vec3 &v) {
  return vec3(t*v.e[0], t*v.e[1], t*v.e[2]);
}

inline vec3 operator/(const vec3 &v, double t) {
  return (1/t) * v;
}

<span class = "comments">// dot function</span>
inline double dot(const vec3 &u, const vec3 &v) {
  return u.e[0] * v.e[0]
       + u.e[1] * v.e[1]
       + u.e[2] * v.e[2];
}

<span class = "comments">// cross function</span>
inline vec3 cross(const vec3 &u, const vec3 &v) {
  return vec3(u.e[1] * v.e[2] - u.e[2] * v.e[1],
	      u.e[2] * v.e[0] - u.e[0] * v.e[2],
	      u.e[0] * v.e[1] - u.e[1] * v.e[0]);
}

inline vec3 unit_vector(vec3 v) {
  return v / v.length();
}

#endif</pre>

    <p>For the most part the class is relatively generic. It has a single property of a double array which can be initialized through the constructor. Then we have some operator overloading for manipulating the values of the class.

      <span class = "nl">The important things to note is why we want to use these values, as they can stand for plotting points to draw shapes or stand for color values in an rgb scale. Moving forward we can take a look at another header file which contains bascially a print out for each of the values in our object.</p>

<em>Code:</em>
<pre class = "code">#ifndef COLOR_H
#define COLOR_H

#include "vec3.h"

#include &lt;iostream>

void write_color(std::ostream &out, color pixel_color) {
  out &lt;&lt; static_cast&lt;int>(255.999 * pixel_color.x()) &lt;&lt; ' '
         &lt;&lt; static_cast&lt;int>(255.999 * pixel_color.y()) &lt;&lt; ' '
         &lt;&lt; static_cast&lt;int>(255.999 * pixel_color.z()) &lt;&lt; '\n';
}

#endif</pre>

<p>Now let's put this all together in our new main function. We can use the same for loops only this time we are initializing the values of our object with the i and j iterators divided by the width and height of our ppm.</p>

<em>Code:</em>
<pre class ="code">#include "color.h"
#include "vec3.h"

#include &lt;iostream>

int main() {

  const int image_width = 256;
  const int image_height = 256;

  std::cout &lt;&lt; "P3\n" &lt;&lt; image_width &lt;&lt; ' ' &lt;&lt; image_height &lt;&lt; "\n255\n";

  for(int j = image_height-1; j >= 0; j--) {
    std::cerr &lt;&lt; "\rScanlines remaining: " &lt;&lt; j &lt;&lt; ' ' &lt;&lt; std::flush;
    for(int i = 0; i &lt; image_width; ++i) {      
      color pixel_color(double(i)/(image_width-1), double(j)/(image_height-1), 0.25);
      write_color(std::cout, pixel_color);
    }
  }

  std::cerr &lt;&lt; "\nDone";
}</pre>
						
  <hr />
  <br />
   <a href="Cpp_Graphics.html">Previous Page</a>
 <span class = "next"><a href="Cpp_Graphics2.html">Next Page</a></span>
  <br /><br />
  </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  
